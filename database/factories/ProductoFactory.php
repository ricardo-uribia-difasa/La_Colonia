<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo_barras' => fake()->word(255),
            'nombre' => fake()->word(255),
            'descripcion' => fake()->word(255),
            'stock' => fake()->numberBetween(0, 1000),
            'precio' => fake()->randomNumber(1),
            'iva' => '0',
        ];
    }
}
