<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique->sentence(2),
            'slug' => $this->faker->unique->slug,
            'published' => $this->faker->numberBetween(0, 1),
            'position' => $this->faker->numberBetween(1, 10),
            'is_free' => $this->faker->numberBetween(0, 1),
            'parent_id' => $this->faker->numberBetween(1, 10),
            'course_id' => \App\Models\Course::factory(),
            'lesson_id' =>  $this->faker->randomElement([null, 1, 2])
        ];
    }
}
