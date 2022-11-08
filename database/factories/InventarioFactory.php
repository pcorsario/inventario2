<?php

namespace Database\Factories;

use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InventarioFactory extends Factory
{
    protected $model = Inventario::class;

    public function definition()
    {
        return [
			'fecha_inventario' => $this->faker->name,
			'hora_inventario' => $this->faker->name,
			'producto_id' => $this->faker->name,
			'condicion_id' => $this->faker->name,
			'sede_id' => $this->faker->name,
			'planta_id' => $this->faker->name,
			'departamento_id' => $this->faker->name,
			'user_id' => $this->faker->name,
			'cantidad' => $this->faker->name,
        ];
    }
}
