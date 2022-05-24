<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
			'name' => $this->faker->name,
			'weight' => $this->faker->name,
			'icon' => $this->faker->name,
			'parent_id' => $this->faker->name,
        ];
    }
}
