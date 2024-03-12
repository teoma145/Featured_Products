<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [];

        if (($open = fopen(database_path() . "/csv/categories.csv", "r")) !== FALSE) {

            while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                $categories[] = $data;
            }

            fclose($open);
        }

        array_shift($categories);


        foreach ($categories as $category) {

            $new_category = new Category();

            $new_category->name = $category[0];
            $new_category->color = $category[1];

            $new_category->save();
        }
    }
}
