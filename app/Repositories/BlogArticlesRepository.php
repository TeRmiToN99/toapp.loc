<?php

namespace App\Repositories;

use App\Models\BlogArticle as Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use PhpParser\Node\Expr\AssignOp\Mod;

/**
 * Class BlogCategoriesRepository
 *
 * @package App\Repositories
 */
class BlogArticlesRepository extends CoreRepository
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
                        ->paginate(25);

        return $result;
    }
}
