<?php

namespace Database\Factories;

use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Penduduk>
 */
class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
$gender = fake()->randomElement(['male', 'female']);

        return [
            'nama' => fake()->name(),
            'email' => fake()->email(),
            'nohp' => fake()->numerify('############'),
            'nik' => fake()->numerify('################'),
            'kelamin' => $gender === 'male' ? 'Laki-laki' : 'Perempuan',
        ];
    }
}
