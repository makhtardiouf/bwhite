<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Category;

class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Listing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $category = Category::first();
        if (!$category) {
            $category = Category::factory()->create();
        }

        return [
            'title' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'description' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'category' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'price' => $this->faker->randomDigitNotNull,
            'image' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'area' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'category_id' => $category->id,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
