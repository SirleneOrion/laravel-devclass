<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       // $factory->define(class:\App\User::class, function (Faker $faker){ //video internet
            $factory->define(App\user::class, function (Faker $faker){
                
                static $password;
           
        return [

            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => $password?: $password = bcrypt('123'),
            'remember_token' => str_random(10),

            //'name' => $faker->name,
            //'email' => $faker->unique()->safeEmail,  //video internet
           // 'email_verified_at' => now(),
           // 'password' => \Illuminate\Support\Facades\Hash::make($faker->password),
           // 'remember_token' => \Illuminate\Support\Str::random(8),

        ];
    });
    }
}
