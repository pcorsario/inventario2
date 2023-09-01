<?php

namespace Database\Factories;

use App\Models\CondicionFisica;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CondicionFisicaFactory extends Factory
{
    protected $model = CondicionFisica::class;

    public function definition()
    {
        return [
			'condicion' => $this->faker->name,
        ];
    }
}
