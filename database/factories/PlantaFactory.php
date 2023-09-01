<?php

namespace Database\Factories;

use App\Models\Planta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlantaFactory extends Factory
{
    protected $model = Planta::class;

    public function definition()
    {
        return [
			'nom_planta' => $this->faker->name,
        ];
    }
}
