<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Post::factory(10)->create([
            'author' => 'Test User'
        ]);
    }
}
