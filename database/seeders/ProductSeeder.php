<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::all();
        $products_count = Product::count();

        for ($i = 0; $i < 5; $i++) {
            $products[rand(1, $products_count)]['highlighted'] = true;
        }

        Product::factory(100)->create();
    }
}
