<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name'=>'Hall']);
        Category::create(['name'=>'Condo']);
        Category::create(['name'=>'Normal Condo']);
        Category::create(['name'=>'Home']);
    }
}
