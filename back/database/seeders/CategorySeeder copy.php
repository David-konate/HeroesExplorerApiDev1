<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'comics']);
        Category::create(['name' => 'manga']);
        Category::create(['name' => 'literature']);
        Category::create(['name' => 'series']);
        Category::create(['name' => 'movies']);
    }
}
