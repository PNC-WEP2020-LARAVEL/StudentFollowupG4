<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create();
       for ($i=0; $i <30 ; $i++) { 
           DB::table('students')->insert([
               'firstname' =>$faker->firstName,
               'lastname' =>$faker->lastName,
               'gender' =>$faker->gender,
               'class' =>$faker->randomLetter,
               'province' =>$faker->city,
               'status' =>$faker->boolean,
           ]);
       }
    }
}
 