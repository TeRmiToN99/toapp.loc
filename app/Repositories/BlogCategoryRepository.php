<?php

namespace App\Repositories;

use App\Models\BlogArticlesCategory as Model;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\AssignOp\Mod;

/**
 * Class BlogCategoriesRepository
 *
 * @package App\Repositories
 */
class BlogCategoryRepository extends CoreRepository
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
        return $this->startConditions()->all();
    }
}
