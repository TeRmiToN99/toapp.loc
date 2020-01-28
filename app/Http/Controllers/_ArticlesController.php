<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{
    protected $message;
    protected $header;
    public function __construct()
    {
        $this->message = 'В этом разделе отображаются все статьи из всех категорий.';
        //$this->title = 'Все статьи.';
    }

    //
    public function index() {
        //$articles = Article::all(); // выбрать все строки из таблицы со всеми колонками
        $title = 'Все статьи';
        $articles = Article::select('id', 'title', 'desc', 'text')->get();// выбрать все строки и выбранные колонки из таблицы
        return view('articles')->with(['message'=>$this->message,
                                                'title'=>$title,
                                                'header'=>$this->header,
                                                'articles'=>$articles]
        );
    }

    //Выбираем 1 запись по id
    public function show($id){
        //$article = Article::find($id);
        //SELECT 'id', 'title', 'desc','text' WHERE id = $id
        $article = Article::select(['id', 'title', 'desc','text'])->where('id',$id)->first();
        //dump($article);
        return view('article-content')->with(['message'=>$this->message,
                                                        'header'=>$this->header,
                                                        'article'=>$article]);
    }

    public function add(){
        return view('add-content')->with('header', $this->header);
    }
    public function store(Request $request){
        // Валидация введенных полей
        // 'alias' => 'required|unique:articles,alias'
        $this->validate($request, [
            'title'=> 'required|max:255',
            'text' => 'required'
        ]);
        $data = $request->all();
        $article = new Article();
        $article->fill($data);
        $article->save();

        return redirect('/');

    }
}
