<?php

namespace Database\Factories;

use App\Models\dashboard;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<dashboard>
 */
class DashboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'nim' => fake()->numerify('########'),
            'tanggal' => fake()->date(),
            'mata_kuliah' => fake()->randomElement([
                'Pemrograman Web',
                'Kecerdasan Buatan',
                'Basis Data',
            ]),
            'jam_masuk' => fake()->time('H:i:s'),
            'status' => fake()->randomElement([
                'Hadir',
                'Izin',
                'Sakit',
                'Alpa',
            ]),
            'keterangan' => fake()->sentence(),
        ];
    }
}
