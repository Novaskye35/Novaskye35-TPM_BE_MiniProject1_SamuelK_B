<?php

namespace Database\Factories;

use App\Models\Smartphone;
use Illuminate\Database\Eloquent\Factories\Factory;

/*
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Smartphone>
 */
class SmartphoneFactory extends Factory
{
    protected $model = Smartphone::class;

    public function definition(): array
    {
        return [
            'name'=> $this->faker->word,
            'manufacturer'=> $this->faker->word,
            'ram'=> $this->faker->randomElement([4, 6, 8, 10, 12, 16]),
            'processor'=> $this->faker->word,
        ];
    }
}
