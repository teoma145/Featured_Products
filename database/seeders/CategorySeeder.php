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

        if (($open = fopen(database_path() . "/csv/categories.csv", "r")) !== false) {

            // Ignora la prima riga (header)
            fgetcsv($open, 1000, ",");

            while (($data = fgetcsv($open, 1000, ",")) !== false) {
                $categories[] = $data;
            }

            fclose($open);
        }

        foreach ($categories as $category) {
            // Verifica se l'array $category contiene almeno due elementi
            if (count($category) >= 2) {
                $new_category = new Category();
                $new_category->name = $category[0];
                $new_category->color = $category[1];
                $new_category->save();
            } else {
                // Gestione dell'errore nel caso in cui l'array $category non contenga abbastanza elementi
                // Puoi registrare un errore o fare un fallback a un valore predefinito
                // Ad esempio:
                // Log::error("Errore durante il seeding: array category non contiene abbastanza elementi.");
            }
        }
    }
}
