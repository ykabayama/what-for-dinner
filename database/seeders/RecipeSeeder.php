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
     * php artisan db:seed --class=RecipeSeeder
     */
    public function run(): void
    {
        $users = User::all();
        foreach ($users as $user) {
            Recipe::factory()->count(20)->create([
                'user_id' => $user,
            ]);
        }
    }
}
