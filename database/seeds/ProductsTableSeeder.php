<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titleProducts = ['Барбекю', 'Кантри', 'Прошуто', 'Филадельфия', 'Чикен Моцарелла', 'Итальяно', 'Мясное ассорти'];
        foreach ($titleProducts as $title){
            $data[] = [
                'title'         => $title,
                'slug'          => (Str::slug($title)),
                'category_id'   => 1,
                'user_id'       => 1,
                'img_url'       => 'Нет картинки',
                'content_raw'   => 'Пока пустой html',
                'content_html'  => 'Пока пустой html',
                ];
        }
        DB::table('products')->insert($data);
    }
}
