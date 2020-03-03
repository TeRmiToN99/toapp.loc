<?php

namespace App\Http\Controllers;

use App\Models\BlogArticle;
use Carbon\Carbon;
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
        //dd(__METHOD__, $eloquentCollection, $eloquentCollection->toArray());
        /**
         * @var \Illuminate\Support\Collection $collection
         */
        $collection = collect($eloquentCollection->toArray());
//        dd(
//            __METHOD__,
//            get_class($eloquentCollection),
//            get_class($collection),
//            $collection
//        );

//        $result['first'] = $collection->first();
//        $result['last'] = $collection->last();


        $result['where']['data'] = $collection
            ->where('category_id', 10)
            ->values()
            ->keyBy('id');


//        $result['where']['count'] = $result['where']['data']->count();
//        $result['where']['isEmpty'] = $result['where']['data']->isEmpty();
//        $result['where']['isNotEmpty'] = $result['where']['data']->isNotEmpty();

//        // условие по количеству элементов в колекции
//        if ($result['where']['count']){
//            //...
//        }
//        // условие на не пустоту коллекции
//        if ($result['where']['data']->isNotEmpty()) {
//            //....
//        }

//        $result['where_first'] = $collection
//            ->firstWhere('created_at', '>', '2019-01-17 01:35:11');

        // Базовая переменная не изменится. Просто вернуться измененная версия.
        /*$result['map']['all'] = $collection->map( function (array $item) {
           $newItem = new \stdClass();
           $newItem->item_id = $item['id'];
           $newItem->item_name = $item['title'];
           $newItem->exists = is_null($item['deleted_at']);

           return $newItem;
        });

        $result['map']['not_exists'] = $result['map']['all']->where('exists',
            '=', false);

        dd($result);*/

        // Базовая переменная изменится (трансформируется).
        $collection->transform(function (array $item){
           $newItem = new \stdClass();
           $newItem->item_id = $item['id'];
           $newItem->item_name = $item['title'];
           $newItem->exists = is_null($item['deleted_at']);
           $newItem->created_at = Carbon::parse($item['created_at']);

           return $newItem;
        });
//        $newItem = new \stdClass();
//        $newItem->id = 9999;
//
//        $newItem2 = new \stdClass();
//        $newItem2->id = 8888;
        //dd($newItem, $newItem2);
        // Установить элемент в начало коллекции
//        $collection->prepend($newItem);
        // Установить элемент в конец коллекции
//        $collection->push($newItem2);
//        dd($newItem, $newItem2, $collection);
//        // добавили в начало коллекции
//        $newItemFirst = $collection->prepend($newItem)->first();
//        // добавили в конец коллекции
//        $newItemLast = $collection->push($newItem2)->last();
//        // забрали элемент с id 1
//        $pulledItem = $collection->pull(1);
//
//        dd(compact('collection', 'newItemFirst', 'newItemLast', 'pulledItem'));

        //Фильтрация. Замена orWhere()
//        $filtered = $collection->filter(function ($item) {
//            $byDay = $item->created_at->isFriday();
//            $byDate = $item->created_at->day == 13;
//
//            $result = $byDay && $byDate;
//
//            return $result;
//        });
//
//        dd(compact('filtered'));

        $sortedSimpleCollection = collect(5, 3, 7, 2, 1)->sort();
        $sortedAscCollection = $collection->sortBy('created_at');
        $sortedDescCollection = $collection->sortByDesc('item_id');

        dd(compact('sortedSimpleCollection',
            'sortedAscCollection',
            'sortedDescCollection'));

    }

}
