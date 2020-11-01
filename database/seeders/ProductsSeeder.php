<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Models\Product');

        for($i = 1; $i <= 500; $i++ ){

        	$name = $faker->company;

                DB::table('products')->insert([
                'title' => $name,
                'slug' => Str::slug($name),
            ]);
        }
    }
}
