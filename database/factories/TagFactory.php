<?php

namespace Database\Factories;

use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tags = [
            'Featured',
            'New',
            'Popular',
            'Trending',
            'Recommended',
            'Top Rated',

        ];
        return [
            //
            'name' => $this->faker->unique()->randomElement($tags),
        ];
    }
}
