<?php

namespace Database\Factories;

use Faker\Generator as Faker;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = app(Faker::class);

        return [
            'name' => $faker->realText(30),
            'description' => $faker->realText(100),
            'image' => $faker->imageUrl(360, 360, 'product', true),
            'ean' => $faker->ean13(),
            'price' => $faker->randomFloat(2, 10, 100),
            'highlighted' => $faker->boolean(),
        ];
    }
}
