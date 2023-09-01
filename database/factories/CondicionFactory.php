<?php

namespace Database\Factories;

use App\Models\Condicion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CondicionFactory extends Factory
{
    protected $model = Condicion::class;

    public function definition()
    {
        return [
			'condicion' => $this->faker->name,
        ];
    }
}
