<?php

use Illuminate\Database\Seeder;
use App\Room;
class PaymRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	Room::create(['name'=>'Starting Borring',
    		'photo'=>'backend/image/room1.jpg',
    		'description'=>'there is one bed and one dinner and other!',
    		'price'=>'20000',
    		'category_id'=>1,
    		'city_id'=>1,
    		'user_id'=>3
    	]);
    }
}
