<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cars")->truncate();
        $faker = Factory::create();
        $data = [];
        for ($i = 0; $i < 30; $i++) {
            $data[] = ["vin" => $faker->unique()->randomNumber, "model" => $faker->name, "description" => $faker->text, "color" => $faker->text, "price" => $faker->randomNumber(), "brand_id" => null];
        }

        DB::table("cars")->insert($data);
    }
}
