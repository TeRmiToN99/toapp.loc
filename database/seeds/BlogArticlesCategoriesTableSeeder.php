<?php

use Illuminate\Database\Seeder;

class BlogArticlesCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $acategories = [];
        $cName = 'Без категории';
        $acategories[] = [
            'title'=> $cName,
            'slug' => Str::slug($cName),
            'parent_id' => 0,
        ];

        for ($i = 2; $i <= 11; $i++) {
            $cName = 'Категория #'.$i;
            $parentId = ($i > 4) ? rand(1, 4) :1;

            $acategories[] = [
                'title' => $cName,
                'slug' => Str::slug($cName),
                'parent_id' => $parentId,
            ];
        }

        DB::table('blog_articles_categories')->insert($acategories);
    }
}
