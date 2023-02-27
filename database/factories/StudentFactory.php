<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'bookID'=>fake()->bookID(),
            'title'=>fake()->title(),
            'totalPages'=>fake()->totalPages(),
            'rating'=>fake()->rating(),
            'isbn'=>fake()->isbn(),
            'publishDate'=>fake()->publishDate(),
            ];
    }
}
