<?php

namespace App\Repositories;

use App\Models\BlogArticle as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use PhpParser\Node\Expr\AssignOp\Mod;

/**
 * Class BlogArticleRepository
 *
 * @package App\Repositories
 */
class BlogArticleRepository extends CoreRepository
{

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * Получить модель для редактирования в админке
     *
     * @param  int $id
     *
     * @return Model
     */
    public function getEdit($id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * Получить список категорний для вывода в выподающем списке
     * @return Collection
     */
    public function getForCombobox()
    {
        $columns = implode(', ', [
            'id',
            'CONCAT (id, ". ", title) AS id_title',
        ]);
        $result = $this
            ->startConditions()
            ->selectRaw($columns)
            ->toBase()
            ->get();

        return $result;
    }

    /**
     * Получить список статей для вывода в списке
     * (Админка)
     *
     * @return  LengthAwarePaginator
     */
    public function getAllWithPaginate(){
        $columns = [
            'id',
            'title',
            'slug',
            'is_published',
            'published_at',
            'user_id',
            'category_id',
        ];

        $result = $this->startConditions()
                        ->select($columns)
                        ->orderBy('id', 'DESC')
                        //->with(['category', 'user'])
                         ->with([
                         //Можно так
                         'category' => function ($query) {
                              $query->select(['id', 'title']);
                        },
                          //    или так
                          'user:id,name',
                         ])
                        //->get();
                        ->paginate(25);
/*
        $article = $result->first();

        $userId = $article->user->id;
        $categoryId = $article->category->id;
        dd($article, $userId, $categoryId);
        dd($result->first());
*/
        return $result;
    }

    /**
     * Получить модель для редактирования в админке.
     *
     * @param int $id
     *
     * @return Model
     */
}
