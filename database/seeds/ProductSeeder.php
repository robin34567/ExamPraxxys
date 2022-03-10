<?php

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'category' => $faker->text,
                'description' => $faker->sentence,
                'datetime' => now()
            ]);
        }
    }
}
