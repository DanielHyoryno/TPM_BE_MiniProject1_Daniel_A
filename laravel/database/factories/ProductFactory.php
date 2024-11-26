<?php
namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(), 
            'price' => $this->faker->randomFloat(2, 100, 1000), 
            'stock' => $this->faker->numberBetween(10, 200), 
            'description' => $this->faker->sentence(),  
            'category_id' => Category::factory(),
        ];
    }
}
