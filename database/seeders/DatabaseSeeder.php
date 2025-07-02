<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'lim',
            'last_name' => 'donggun',
            'email' => 'test@example.com',
        ]);

        $this->call([JobSeeder::class, PostSeeder::class, TagSeeder::class, JobSeeder::class, CommentSeeder::class]);
    }
}
