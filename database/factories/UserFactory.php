<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Definisikan model yang akan digunakan oleh factory.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Definisikan state default untuk pembuatan data palsu.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'avatar' => $this->faker->imageUrl(100, 100, 'people'),
        ];
    }
}
