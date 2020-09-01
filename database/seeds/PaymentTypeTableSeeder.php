<?php

use Illuminate\Database\Seeder;
use App\Paymenttype;

class PaymentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paymenttype::create(['name'=>'KBZ']);
        Paymenttype::create(['name'=>'AYA']);
        Paymenttype::create(['name'=>'CB']);
        Paymenttype::create(['name'=>'Master']);
        Paymenttype::create(['name'=>'Visa']);
    }
}
