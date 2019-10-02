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
        //factory(\App\Category::class, 10)->create();

        $category = new \App\Category;
        $category->name = "Features";
        $category->slug = "features";
        $category->save();

        $category = new \App\Category;
        $category->name = "Food";
        $category->slug = "food";
        $category->save();
    }
}
