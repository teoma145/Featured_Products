<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run(): void
    {
        Product::factory(100)->create();
        $productsToUpdate = Product::where('highlighted', false)->inRandomOrder()->take(5)->get();


        foreach ($productsToUpdate as $product) {
            $product->highlighted = true;
            $product->save();
        }



    }
}
