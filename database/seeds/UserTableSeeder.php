<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $owner=User::create([
        	'name'=>'owner',
        	'email'=>'aye@gmail.com',
        	'password'=>Hash::make('111111111')
        ]);
        $owner->assignRole('owner');

         $customer=User::create([
        	'name'=>'customer',
        	'email'=>'customer@gmail.com',
        	'password'=>Hash::make('111111111')
        ]);
         $customer->assignRole('customer');

          $admin=User::create([
        	'name'=>'admin',
        	'email'=>'admin@gmail.com',
        	'password'=>Hash::make('111111111')
        ]);
          $admin->assignRole('admin');
    }
}
