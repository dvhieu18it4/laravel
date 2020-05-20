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
   		    'id' =>'7',
    
          'name' =>'admin',
          'phone' =>'9999999',
          'usertype'=>'admin',
          'email' =>'teoem@me.com',
          'password' =>'$10$T8CbQj1z0mldlzDcSUkOS.xA7nTsirb6C6pPylZUHbKKykOOjqMWS',
          
    
   			]);   
         
    }
}
