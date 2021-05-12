<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index)  {
            DB::table('products')->insert([
                'name' => $faker->city,
                'slug' => $faker->unique()->slug,
                'price' => $faker->numberBetween($min = 1, $max = 1000),
                'description'=> $faker->paragraph($nb =1)
            ]);
        }
        //
    }
}
