<?php

namespace App\Http\Controllers\Blog\Cpanel;

use App\Http\Requests\BlogCategoryCreateRequest;
use App\Http\Requests\BlogCategoryUpdateRequest;
use App\Models\BlogArticlesCategory;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paginator = BlogArticlesCategory::paginate(5);

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
        $categoryList = BlogArticlesCategory::all();

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


       if ($item) {
           return redirect()->route('blog.cpanel.categories.edit', [$item->id])
               ->with(['success' => 'Успешно сохранено']);
       } else {
           return  back()->withErrors(['msg'=> 'Ошибка сохранения'])
               ->withInput();
       }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd(__METHOD__);
        //$item = BlogArticlesCategory::findOrFail($id);
        $item = BlogArticlesCategory::find($id);
        //$item = BlogArticlesCategory::where('id', '=',  $id)->first();

        $categoryList = BlogArticlesCategory::all();
        //dd($categoryList);
        return view('blog.cpanel.categories.edit',
            compact('item', 'categoryList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
        $item = BlogArticlesCategory::find($id);

        if (empty($item)) {
            return back()
                ->withErrors(['msg' => "Запись id=[{$id}] не найдена"])
                ->withInput();
        }

        $data = $request->all();
        if (empty($data['slug'])) {
            $data['slug'] = \Str::slug($data['title']);
        }
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
