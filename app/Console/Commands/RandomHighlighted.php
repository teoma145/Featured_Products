<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class RandomHighlighted extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:random-highlighted';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $productsHighlighted = Product::where('highlighted', true)->get();


        foreach ($productsHighlighted as $product) {
            $product->highlighted = false;
            $product->save();
        }

        $productsToHighlighted = Product::where('highlighted', false)->inRandomOrder()->take(5)->get();

        foreach ($productsToHighlighted as $product) {
            $product->highlighted = true;
            $product->save();
        }
    }
}
