<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

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

        // $fakerImage = $this->faker->image(
        //     storage_path("public/images"),
        //     100,
        //     50
        // );


        return [
            'name' => $this->faker->text($this->faker->numberBetween(5, 100)),
            'description' => $this->faker->text($this->faker->numberBetween(50, 1000)),
            'icon' => '', //$this->faker->imageUrl(100,50),
            'priority' => $this->faker->numberBetween(1, 10),
            'parent_id' => $category->id,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
