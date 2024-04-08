<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Computer;

class ComputersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Computer::create([
            'brand' => 'Dell',
            'model' => 'Inspiron 15',
            'processor' => 'Intel Core i5',
            'ram' => 8,
            'storage' => 512,
            'description' => 'This is a powerful laptop suitable for both work and entertainment.',
            'date_of_purchase' => '2022-03-15',
        ]);

        Computer::create([
            'brand' => 'HP',
            'model' => 'Pavilion x360',
            'processor' => 'AMD Ryzen 5',
            'ram' => 16,
            'storage' => 256,
            'description' => 'Convertible laptop with touchscreen capability.',
            'date_of_purchase' => '2021-12-20',
        ]);
        Computer::factory()->count(100)->create();
        // Agrega más datos aquí si lo deseas
    }
}
