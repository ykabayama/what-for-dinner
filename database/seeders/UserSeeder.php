<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fix_email = 'test_user@example.com';
        if (User::where('email', $fix_email)->exists()) {
            User::factory()->create();
        } else {
            // fix_emailのUserがない場合はfix_emailのUserを作成
            User::factory()->create([
                'name' => 'test_名前',
                'email' => $fix_email
            ]);
        }
    }
}
