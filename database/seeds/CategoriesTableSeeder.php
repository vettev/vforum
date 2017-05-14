<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new App\Category();
        $cat->name = "Main";
        $cat->save();
        $cat2 = new App\Category();
        $cat2->name = "Others";
        $cat2->save();
    }
}
