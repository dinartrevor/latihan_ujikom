<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class FoodSeeder extends Seeder
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
            DB::table('foods')->insert([
        
                'name' => $faker->name, 
                'price' => $faker->randomNumber,
                'status' => $faker->word,
                'image' =>'https://cdn-image.bisnis.com/posts/2018/10/02/844786/raisa-topo.jpg',
                'created_at' => $faker->date,
           ]);
        }
    }
}