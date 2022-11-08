<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
			'codigo_producto' => $this->faker->name,
			'nombre_producto' => $this->faker->name,
			'fecha_compra' => $this->faker->name,
			'precio' => $this->faker->name,
			'caracteristicas' => $this->faker->name,
			'categoria_id' => $this->faker->name,
        ];
    }
}
