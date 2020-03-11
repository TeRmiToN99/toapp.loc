<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template');
});

Route::group(['namespace' => 'Blog', 'prefix' =>'blog'], function (){

    Route::resource('articles', 'ArticlesController')->names('blog.articles');
    Route::resource('events', 'EventsController')->names('blog.events');
});

Route::resource('products', 'ProductsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'digging_deeper',], function () {
    Route::get('collections', 'DiggingDeeperController@collections')
        ->name('digging_peeper.collections');
});


//Route::resource('rest', 'RestTestController')->names('restTest');
// Админ панель
$groupData = [
    'namespace' => 'Blog\Cpanel',
    'prefix' => 'cpanel/blog',
];
Route::group($groupData, function (){
    // BlogCategory
    $methods = ['index', 'edit', 'update', 'create', 'store',];
    Route::resource('categories', 'CategoryController')
        ->only($methods)
        ->names('blog.cpanel.categories');

    //BlogArticle
    Route::resource('articles', 'ArticleController')
        ->except(['show'])
        ->names('blog.cpanel.articles');
});


/****************************************Начало статей*****************************************************/
/*Route::get('articles', 'ArticlesController@Index');// Вывод статей
Route::get('article/{id}', 'ArticlesController@show')->name('articleShow'); //Вывод статьи
Route::get('page/add', 'ArticlesController@add'); //Открытие страницы для добавления статьи

Route::post('page/add', 'ArticlesController@store')->name('articleStore');//Добавление статьи в базу данных

Route::delete('page/delete/{article}', function (\App\Article $article){
    //ВЫбираем модель
    //$article_tmp = \App\Article::where('id', $article)->first();
    //$article_tmp->delete();
    //dd($article);
    $article->delete();

    return redirect('/');

})->name('articleDelete');// Удаление статьи
/*****************************************Конец статей*****************************************************/

/***************************************Начало событий*****************************************************/
//Route::get('events', '');
/*****************************************Конец событий****************************************************/

/***************************************Начало товаров*****************************************************/
/*Route::get('products', 'ProductsController@Index');
/*****************************************Конец товаров****************************************************/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
