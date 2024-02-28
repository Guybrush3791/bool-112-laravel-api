<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake() -> words(3, true),
            "description" => fake() -> sentence,
            "date" => fake() -> date,
            "weight" => fake() -> numberBetween(50, 5000),
            "path" => 'https://picsum.photos/200/300?random=' . fake() -> numberBetween(1, 100)
        ];
    }
}
