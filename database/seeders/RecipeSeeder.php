<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create();
        Recipe::factory()->count(10)->create([
            'user_id' => $user,
        ]);
    }
}
