<?php

namespace Database\Seeders;

use App\Models\Hero;
use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $heroes = Hero::all();
        $skills = Skill::all();
        foreach ($heroes as $hero) {
            $assignedSkills = $skills-> random(rand(1,3));
            $hero->skills()->attach($assignedSkills);
        }
    }
}
