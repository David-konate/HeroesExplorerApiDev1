<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Alignment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AlignmentSeeder::class,
            CategorySeeder::class,
            CreatorSeeder::class,
            RaceSeeder ::class,
            HeroSeeder ::class,
            SkillSeeder ::class,
           ]);

    }
}
