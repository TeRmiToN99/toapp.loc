<?php

namespace App\Http\Controllers\Blog\Cpanel;

use App\Http\Requests\BlogCategoryCreateRequest;
use App\Http\Requests\BlogCategoryUpdateRequest;
use App\Models\BlogArticlesCategory;
use App\Repositories\BlogCategoryRepository;
use Illuminate\Http\Request;

/**
 * Управление категориями блога
 *
 * @package  App\Http\Controllers\Blog\Cpanel
*/
class CategoryController extends BaseController
{
    /**
     * @var BlogCategoryRepository
     */
    private $blogCategoryRepository;

    public function __construct()
    {
        parent::__construct();

        $this->blogCategoryRepository = app(BlogCategoryRepository::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$paginator = BlogArticlesCategory::paginate(15);
        $paginator = $this->blogCategoryRepository->getAllWithPaginate(15);

        return view('blog.cpanel.categories.index', compact('paginator'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new BlogArticlesCategory();
        $categoryList = $this->blogCategoryRepository->getForCombobox();

        return view('blog.cpanel.categories.create',
        compact('item', 'categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryCreateRequest $request)
    {
       $data = $request->input();
       if (empty($data['slug'])) {
           $data['slug'] = \Str::slug($data['title']);
       }

       //Создаем объект класса BlogArticlesCategory перед добавлением в БД
       // $item = new BlogArticlesCategory($data);
        // $item->save();

        //Второй способ создания объекта и добавления его в БД
        $item = (new BlogArticlesCategory())->create($data);


       if ($item instanceof BlogArticlesCategory) {
           return redirect()->route('blog.cpanel.categories.edit', [$item->id])
               ->with(['success' => 'Успешно сохранено']);
       } else {
           return  back()->withErrors(['msg'=> 'Ошибка сохранения'])
               ->withInput();//?
       }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param BlogCategoryRepository $categoryRepository
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$item = BlogArticlesCategory::find($id);
        //$categoryList = BlogArticlesCategory::all();
        //dd($categoryList);

        $item = $this->blogCategoryRepository->getEdit($id);

       /* $v['title_before'] = $item->title;

        $item->title = ' fsdfsdf DFSDfsDFSD 2342';

        $v['title_after'] = $item->title;
        $v['getAttribute'] = $item->getAttribute('title');
        $v['attributesToArray'] = $item->attributesToArray();
        $v['attributes'] = $item->attributes['title'];
        $v['getAttributeValue'] = $item->getAttributeValue('title');
        $v['getMutatedAttributes'] = $item->getMutatedAttributes();
        $v['hasGetMutator for title'] = $item->hasGetMutator('title');
        $v['toArray'] = $item->toArray();

        dd($v, $item);*/

        if (empty($item)){
            abort(404);
        }
        $categoryList = $this->blogCategoryRepository->getForCombobox();

        return view('blog.cpanel.categories.edit',
            compact('item', 'categoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(BlogCategoryUpdateRequest $request, $id)
    {
        /**
        $rules = [
            'title'         => 'required|min:5|max:200',
            'slug'          => 'max:200',
            'description'   => 'string|max:500|min:3',
            'parent_id'     => 'required|integer|exists:blog_articles_categories,id',
        ];*/


        //$validatedData = $request->validate($rules);
        //$validatedData = $this->validate($request, $rules);
        /**
        $validator = \Validator::make($request->all(), $rules);
        $validatedData[] = $validator->passes();
        $validatedData[] = $validator->validate();
        $validatedData[] = $validator->valid();
        $validatedData[] = $validator->failed();
        $validatedData[] = $validator->errors();
        $validatedData[] = $validator->fails();
        */
        //dd($validatedData);

        //dd(__METHOD__, $request->all(), $id);
        //$item = BlogArticlesCategory::find($id);

        $item = $this->blogCategoryRepository->get($id);

        if (empty($item)) {
            return back()
                ->withErrors(['msg' => "Запись id=[{$id}] не найдена"])
                ->withInput();
        }

        $data = $request->all();
        // перенесено на обсервер
        /*if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['title']);
        }*/
        //$data = $request->input();
        //Обновление данных первый вариант
        $result = $item->update($data);
        //Обновление данных второй вариант более длинный
        /*$result = $item
            ->fill($data)
            ->save();
        */
        if ($result) {
            return redirect()
                ->route('blog.cpanel.categories.edit', $item->id)
                ->with(['success' => 'Успешно сохранено']);
        }else{
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput()
                ;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd(__METHOD__);
    }
}
