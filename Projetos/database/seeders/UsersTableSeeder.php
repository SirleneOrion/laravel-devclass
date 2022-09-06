<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name'=>'John Doe',
            'email'=>'jonh@example.com',
            'password'=>'test'
        ]);
        
        //factory( class:: \App\User::class,  5)->create(); //no video
        $users= factory( \App\User::class,  5)->create();
    }
}
