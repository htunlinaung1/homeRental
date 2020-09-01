<?php

use Illuminate\Database\Seeder;
use App\City;
class CitiyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['name'=>'Haling']);
        City::create(['name'=>'MayNiGone']);
        City::create(['name'=>'SanChaung']);
    }
}
