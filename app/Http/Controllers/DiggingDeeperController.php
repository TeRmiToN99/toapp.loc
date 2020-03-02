<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use Illuminate\Http\Request;

class DiggingDeeperController extends Controller
{
    /**
     * Базовая информация по коллекциям:
     * @url  https://laravel.com/docs/6.x/collections
     *
     * Справочная информация:
     * @url  https://laravel.com/api/6.x/Illuminate/Support/Collection.html
     *
     * Вариант коллекций для моделей eloquent:
     * @url  https://laravel.com/api/6.x/Illuminate/Database/Eloquent/Collection.html
     *
     * Билдер запросов - то с чем можно перепутать коллекции:
     * @url  https://laravel.com/docs/6.x/queries
     */

    public function collections()
    {
        $result = [];

        /**
         * @var \Illuminate\Database\Eloquent\Collection $eloquentCollection
         */
        $eloquentCollection = BlogArticle::withTrashed()->get();
        dd(__METHOD__, $eloquentCollection, $eloquentCollection->toArray());
    }
}
