<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => "water",
            'price' => 0.65
        ]);

        DB::table('products')->insert([
            'name' => "soda",
            'price' => 1.50
        ]);

        DB::table('products')->insert([
            'name' => "juice",
            'price' => 1.00
        ]);
    }
}
