<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kelas_nama' => Str::random(5),
            'kelas_desc' => fake()->paragraph(),
            'kelas_kode' => Str::random(8),
            'kelas_by' => User::factory(),
        ];
    }
}
