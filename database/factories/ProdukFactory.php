<?php

namespace Database\Factories;

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
            //
            'nama_produk' => fake()->sentence(mt_rand(1, 3)),
            // 'body' => '<p>' . implode('</p><p>', fake()->paragraphs(mt_rand(5, 10))) . '</p>',
            // 'body' => collect(fake()->paragraphs(mt_rand(5, 10)))->map(function ($p) {
            //     return "<p>$p</p>";
            // }),
            'harga' => fake()->numberBetween(1000, 10000),

            'kategori_id' => mt_rand(1, 2),
            'status_id' => mt_rand(1, 2)

        ];
    }
}
