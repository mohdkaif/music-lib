<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'name' => $this->faker->text(20),
            'year' => $this->faker->year,
            'songable_type' => $this->faker->randomElement(['album' ,'artist']),
            'songable_id' => $this->faker->randomElement([Album::inRandomOrder()->first()->id,Artist::inRandomOrder()->first()->id])
        ];
    }
}
