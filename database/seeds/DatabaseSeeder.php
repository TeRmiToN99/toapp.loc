<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BlogArticlesCategoriesTableSeeder::class);
        $this->call(ProductsCategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BlogEventsCategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        factory(\App\Models\User::class, 50)->create();
        factory(\App\Models\BlogEvent::class, 50)->create();
        factory(\App\Models\BlogArticle::class, 50)->create();

    }
}
