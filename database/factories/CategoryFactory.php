<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $elements = ['PHP', 'CSS', 'JS', 'SQL', "React"];
        return [
            'name' => $this->faker->unique()->randomElement($elements),
            'slug' => $this->faker->unique->slug,
        ];
    }
}
