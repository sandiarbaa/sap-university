<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'nama' => fake()->name(),
            'nim' => fake()->randomNumber(mt_rand(9, 9)),
            'email' => fake()->safeEmail(),
            'prodi' => fake()->sentence(mt_rand(2, 3)),
        ];
    }
}
