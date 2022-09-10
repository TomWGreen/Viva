<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Tom Green',
            'email' => 'tom.green@bastionflowe.com',
            'password' => '$2y$10$v3NJWOcHDJgWPikO/wzMw.oJvwt6voRnVqRQUXqNSeUZW5xzVCQ/S',
        ]);

        $this->call(DocumentSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(StudentSeeder::class);

    }
}
