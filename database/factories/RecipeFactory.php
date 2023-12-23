<?php

declare(strict_types=1);
declare(strict_type=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'name' => fake()->randomElement(['唐揚げ', 'ちゃんぽん', 'カレー', 'ハヤシライス', 'シチュー', '豚汁']),
            'ingredient' => fake()->realText(),
            'recipe_method' => fake()->realText(),
            'last_make_date' => fake()->randomElement([null, fake()->date()]),
        ];
    }
}
