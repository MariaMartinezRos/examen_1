<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'reading_time' => random_int(1, 10),    //
            'slug' => Str::slug($title),   //
            'summary' => $this->faker->paragraph(), //
            'body' => $this->faker->paragraph(),
            'status' =>$this->faker->randomElement(['published', 'draft', 'archived', 'pending']), //
            'published_at' => random_int(0, 2)
                ? $this->faker->dateTimeBetween('-1 month', '+1 months')
                : null,
        ];
    }
}
