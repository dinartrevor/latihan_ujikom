<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 10; $i++){

            // insert data ke table pegawai menggunakan Faker
            DB::table('users')->insert([
        
                'name' => $faker->name, 
                'email' => $faker->email,
                'password' => $faker->password,
                'level_id' =>$faker->randomDigit,
           ]);
        }
    }
}
