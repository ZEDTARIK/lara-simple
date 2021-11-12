<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "EmployeeNumber" => Str::random(10),
            "EmployeeFullName" => $this->faker->name(),
            "EmployeeEmail" => $this->faker->unique()->safeEmail(),
            "EmployeeAdress" => $this->faker->address(),
        ];
    }
}
