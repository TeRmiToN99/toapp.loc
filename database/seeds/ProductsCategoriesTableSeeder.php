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
            ['name' =>  'Пицца',        'slug'      =>'pizza',],
            ['name' =>  'Роллы',        'slug'      =>'rolls',],
            ['name' =>  'Закуски',      'slug'      =>'snacks',],
            ['name' =>  'Салаты',       'slug'      =>'salads',],
            ['name' =>  'Паста',        'slug'      =>'pasta',],
            ['name' =>  'Горячее',      'slug'      =>'hot_dish',],
            ['name' =>  'Гарниры',      'slug'      =>'garnishes',],
            ['name' =>  'Супы',         'slug'      =>'soups',],
            ['name' =>  'Десерты',      'slug'      =>'desserts',],
        ];

        DB::table('products_categories')->insert($data);
    }
}
