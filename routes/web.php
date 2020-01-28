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
    return view('welcome');
});

Route::group(['namespace' => 'Blog', 'prefix' =>'blog'], function (){
    Route::resource('articles', 'ArticlesController')->names('blog.articles');
});


Route::resource('rest', 'RestTestController')->names('restTest');
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
