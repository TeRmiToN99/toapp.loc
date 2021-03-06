<?php

use Illuminate\Database\Seeder;

class BlogEventsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ecategories = [];

        $cName = 'Без категории';
        $ecategories[] = [
            'title'=> $cName,
            'slug' => Str::slug($cName),
            'parent_id' => 0,
        ];

        for ($i = 2; $i <= 11; $i++) {
            $cName = 'Категория #'.$i;
            $parentId = ($i > 4) ? rand(1, 4) :1;

            $ecategories[] = [
                'title' => $cName,
                'slug' => Str::slug($cName),
                'parent_id' => $parentId,
            ];
        }

        DB::table('blog_events_categories')->insert($ecategories);
    }
}
