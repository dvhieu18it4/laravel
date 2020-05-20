<?php

use Illuminate\Database\Seeder;
use Illuminate\DB;
use App\lichtrinh;
use App\CTchuyendi;
use App\User;
class Seeduser extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
         $time = date('Y-m-d H:i:s');
   			User::create([
   		    'id' =>'3',
    
          'name' =>'Admin',
          'phone' =>'9999999',
          'usertype'=>'admin',
          'email' =>'admin123@me.com',
          'password' =>'123456',
          
    
   			]);   
         
    }
}
