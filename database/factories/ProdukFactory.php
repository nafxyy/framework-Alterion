<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_produk' => fake()->unique()->numberBetween(1000, 9999),
            'nama' => fake()->name(),
            'harga' => fake()->numberBetween(30000, 250000),
            'stok' => fake()->numberBetween(1, 5),
            'ukuran' => fake()->randomElement(['S','M','L','XL']),
            'deskripsi' => fake()->sentence(),
            'kategori_id' =>  Kategori::all()->random()->id
        ];
    }
}
