<?php

namespace App\Http\Controllers\Blog\Cpanel;

use App\Http\Requests\BlogArticleCreateRequest;
use App\Http\Requests\BlogArticleUpdateRequest;
use App\Jobs\BlogArticleAfterCreateJob;
use App\Jobs\BlogArticleAfterDeleteJob;
use App\Models\BlogArticle;
use App\Repositories\BlogArticleRepository;
use App\Repositories\BlogCategoryRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Управление статьями блога
 *
 * @package App\Http\Controllers\Blog\Cpanel
 */
class ArticleController extends BaseController
{
    /**
     * @var BlogArticleRepository
     */
    private $blogArticleRepository;

    /**
     * @var BlogCategoryRepository
     */
    private $blogCategoryRepository;

    /**
     * ArticleController constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->blogArticleRepository = app(BlogArticleRepository::class);
        $this->blogCategoryRepository = app(BlogCategoryRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = $this->blogArticleRepository->getAllWithPaginate();
        return view('blog.cpanel.articles.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $item = new BlogArticle();
       $categoryList = $this->blogCategoryRepository->getForCombobox();

       return view('blog.cpanel.articles.create',
                    compact('item', 'categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  BlogArticleCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogArticleCreateRequest $request)
    {
        $data = $request->input();
        $item = (new BlogArticle())->create($data);


        if ($item instanceof BlogArticle) {
            //$this->dispatch(new BlogArticleAfterCreateJob($item));
            $job = new BlogArticleAfterCreateJob($item);
            $this->dispatch($job);

            return redirect()->route('blog.cpanel.articles.edit', [$item->id])
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return  back()->withErrors(['msg'=> 'Ошибка сохранения'])
                ->withInput();//?
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = $this->blogArticleRepository->getEdit($id);
        if (empty($item)){
            abort(404);
        }

        $categoryList
            = $this->blogCategoryRepository->getForCombobox();

        return view('blog.cpanel.articles.edit',
            compact('item', 'categoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request     $request
     * @param  int                          $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(BlogArticleUpdateRequest $request, $id)
    {
        $item = $this->blogArticleRepository->getEdit($id);
        if (empty($item)) {
            return back()
                ->withErrors(['msg' => "Запись id = [{$id}] не найдена"])
                ->withInput();
        }
        $data = $request->all();
        /*
        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['title']);
        }
        if (empty($item->published_at) && $data['is_published']) {
            $data['published_at'] = Carbon::now();
        }*/
        $result = $item->update($data);
        if ($result) {
            return redirect()
                ->route('blog.cpanel.articles.edit', $item->id)
                ->with(['success' => 'Успешно сохранено']);
        }else{
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput()
                ;
        }
        return ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int                      $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd(__METHOD__, $id, request()->all());
        // софт-удаление, в бд остается.
        $result = BlogArticle::destroy($id);
        // полное удаление из бд
        //$result = BlogArticle::find($id)->forceDelete();

        if ($result) {
            BlogArticleAfterDeleteJob::dispatch($id);

            //> Варианты запуска:

//            BlogArticleAfterDeleteJob::dispatchNow($id);
//            $this->dispatch(new BlogArticleAfterDeleteJob($id));
//            $this->dispatchNow(new BlogArticleAfterDeleteJob($id));


            return redirect()
                ->route('blog.cpanel.articles.index')
                ->with(['success' => "Запись Id[$id] удалена"]);
        }else{
            return back()
                ->withErrors(['msg' => 'Ошибка удаления']);
        }
    }
}
