<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Kelas;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TugasSeeder>
 */
class TugasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kelas_id' => Kelas::factory(),
            'create_by' => User::factory(),
            'update_by' => User::factory(),
            'tugas_judul' => Str::random(8),
            'tugas_desc' => fake()->paragraph(),
            'tugas_due' => fake()->date("Y-m-d H:i:s"),
        ];
    }
}
