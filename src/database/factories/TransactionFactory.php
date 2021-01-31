<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 12),
            'account_id' => $this->faker->numberBetween(1, 20),
            'category_id' => $this->faker->numberBetween(1, 30),
            'title' => $this->faker->text(32),
            'content' => $this->faker->text(128),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
