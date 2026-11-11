<?php

namespace Database\Factories;

use App\Models\Dashboard;
use Illuminate\Database\Eloquent\Factories\Factory;

class DashboardFactory extends Factory
{
    protected $model = Dashboard::class;

    public function definition(): array
    {
        $produk = [
            ['nama' => 'Laptop Asus', 'kategori' => 'Elektronik'],
            ['nama' => 'Laptop Lenovo', 'kategori' => 'Elektronik'],
            ['nama' => 'Mouse Wireless', 'kategori' => 'Elektronik'],
            ['nama' => 'Keyboard Gaming', 'kategori' => 'Elektronik'],
            ['nama' => 'Monitor LED', 'kategori' => 'Elektronik'],
            ['nama' => 'Headphone Bluetooth', 'kategori' => 'Elektronik'],
            ['nama' => 'Kamera Digital', 'kategori' => 'Elektronik'],
            ['nama' => 'Power Bank', 'kategori' => 'Elektronik'],
            ['nama' => 'Kipas Angin', 'kategori' => 'Elektronik'],
            ['nama' => 'Setrika Listrik', 'kategori' => 'Elektronik'],
            ['nama' => 'Blender', 'kategori' => 'Peralatan Rumah'],
            ['nama' => 'Rice Cooker', 'kategori' => 'Peralatan Rumah'],
            ['nama' => 'Lampu Tidur', 'kategori' => 'Peralatan Rumah'],
            ['nama' => 'Botol Minum', 'kategori' => 'Peralatan Rumah'],
            ['nama' => 'Buku Catatan', 'kategori' => 'Peralatan Rumah'],
            ['nama' => 'Baju Kaos', 'kategori' => 'Pakaian'],
            ['nama' => 'Celana Jeans', 'kategori' => 'Pakaian'],
            ['nama' => 'Sepatu Sneakers', 'kategori' => 'Pakaian'],
            ['nama' => 'Tas Ransel', 'kategori' => 'Aksesoris'],
            ['nama' => 'Jam Tangan', 'kategori' => 'Aksesoris'],
        ];

        $pilihan = fake()->randomElement($produk);

        return [
            'nama_produk' => $pilihan['nama'],
            'kode_produk' => fake()->unique()->numerify('PRD-#####'),
            'kategori' => $pilihan['kategori'],
            'harga' => fake()->numberBetween(10000, 1000000),
            'stok' => fake()->numberBetween(1, 100),

        ];
    }
}
