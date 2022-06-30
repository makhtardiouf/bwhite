<?php

namespace Database\Factories;

use App\Models\Payments;
use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

class PaymentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        $user = User::first();
        if (!$user) {
            $user = User::factory()->create();
        }

        return [
            'type' => $this->faker->text($this->faker->numberBetween(5, 4096)),
            'product' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'platform' => $this->faker->text($this->faker->numberBetween(5, 255)),
            'data' => $this->faker->word,
            'user_id' => $user->id,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
