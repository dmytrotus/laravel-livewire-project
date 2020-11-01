<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;
use DB;

class PricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 500; $i++ ){

                DB::table('prices')->insert([
                'product_id' => $i,
                'price' => rand(1,9999),
            ]);
        }
    }
}
