<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil semua seeder di sini
        $this->call([
            UserSeeder::class,
            RoomSeeder::class,
            FighterSeeder::class,
        ]);
    }
}
