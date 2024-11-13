<?php

namespace Database\Factories;

use App\Models\Role;
use Database\Seeders\RoleSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roles = RoleSeeder::$roles;
        $role = $this->faker->randomElement($roles);

        return [
            'name' => $role['name'],
            'display_name' => $role['display_name'],
            'description' => $role['description'],
        ];
    }
}
