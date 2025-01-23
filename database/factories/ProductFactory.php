<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description'=>$this->faker->paragraph,
            'sku' => "1234-". $this->faker->word,
            'price' => $this->faker->numberBetween( 5, 23235),
            'stock' => $this->faker->numberBetween(0,50),
          'category_id' => $this->faker->randomElement(Category::pluck('id')),

        ];
    }
}
