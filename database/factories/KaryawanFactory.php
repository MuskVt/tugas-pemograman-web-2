<?php

namespace Database\Factories;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Karyawan>
 */
class KaryawanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            // untuk mencetak data nama dan nim dari seeder akan disi menggunakan faker
            'name' => fake()->name(),
            'nik' => fake()->numerify('######'),
            
            // untuk mencetak data jenis kelamin dari seeder akan disi menggunakan faker
            'kelamin' => $this->faker->randomElement([
                'laki-laki',
                'perempuan',
                ]),

            // untuk mencetak data jabatan dari seeder akan disi menggunakan faker
            'jabatan' => $this->faker->randomElement([
                'Pekerja Produksi',
                'Pekerja Gudang',
                'Pekerja Produksi',
                'Pekerja Gudang',
                'Pekerja Produksi',
                'Pekerja Gudang',
                'Pekerja Produksi',
                'Pekerja Gudang',
                'Pekerja Produksi',
                'Pekerja Gudang',
                'Pekerja Produksi',
                'Pekerja Gudang',
                    // agar pekerja  lebih banyak muncul


                'Kepala Pabrik',
                'Kepala Gudang',
                'Manejer Produksi',
                

                ]),

            // untuk mencetak data tglgabung dari seeder akan disi menggunakan faker    
            'tglgabung' => $this->faker->dateTimeBetween('-3 years', 'now')->format('Y-m-d'),
                
                
        ];
    }
}
