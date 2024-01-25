<?php

namespace Database\Seeders;

use App\Models\Alignment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alignment::create([
            'name' => 'Hero'
        ]);
        Alignment::create([
            'name' => 'Vilain'
        ]);
        Alignment::create([
            'name' => 'Antiheroe'
        ]);
    }
}
