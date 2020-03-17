<?php

use Illuminate\Database\Seeder;

class ProductsCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' =>  'Пицца',        'slug'      =>'pizza',],
            ['title' =>  'Роллы',        'slug'      =>'rolls',],
            ['title' =>  'Закуски',      'slug'      =>'snacks',],
            ['title' =>  'Салаты',       'slug'      =>'salads',],
            ['title' =>  'Паста',        'slug'      =>'pasta',],
            ['title' =>  'Горячее',      'slug'      =>'hot_dish',],
            ['title' =>  'Гарниры',      'slug'      =>'garnishes',],
            ['title' =>  'Супы',         'slug'      =>'soups',],
            ['title' =>  'Десерты',      'slug'      =>'desserts',],
        ];

        DB::table('products_categories')->insert($data);
    }
}
