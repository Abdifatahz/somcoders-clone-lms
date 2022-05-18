<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique->sentence(10),
            'slug' => $this->faker->unique->slug,
            'description' => $this->faker->sentence(15),
            'price' => $this->faker->randomFloat(2, 0, 9999),
            'duration' => $this->faker->randomNumber(0),
            'embed' => $this->faker->text(255),
            'published' => $this->faker->randomNumber(0),
            'level' => 'Beginer',
        ];
    }
}
