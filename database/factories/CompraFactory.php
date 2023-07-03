<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' => $this -> faker ->dateTimeThisMonth(),
            'producto_id' => $this -> faker -> numberBetween (1,50),
            'persona_id' => $this -> faker -> numberBetween(1,7)
        ];
    }
}
