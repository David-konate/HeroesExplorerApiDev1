<?php

namespace Database\Seeders;

use App\Models\Creator;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Supposons que 'name' représente 'last_name' et 'first_name' concaténés
        Creator::create([
            'last_name' => 'Stan',
            'first_name' => 'Lee',
            'date_de_naissance' => '1922-12-28', // Ajoutez la date correcte
            'date_de_deces' => '2018-11-12', // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Roy',
            'first_name' => 'Thomas',
            'date_de_naissance' => '1940-11-22', // Ajoutez la date correcte
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Fabian',
            'first_name' => 'Nicieza',
            'date_de_naissance' => '1961-12-31', // Ajoutez la date correcte
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Masashi',
            'first_name' => 'Kishimoto',
            'date_de_naissance' => '1974-11-08', // Ajoutez la date correcte
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        // Supposons que 'name' représente 'last_name' et 'first_name' concaténés
        Creator::create([
            'last_name' => 'Akira',
            'first_name' => 'Toriyama',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Eiichiro',
            'first_name' => 'Oda',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Buronson',
            'first_name' => '', // Ajoutez le prénom si disponible, sinon laissez vide
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Masami',
            'first_name' => 'Kurumada',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Tite',
            'first_name' => 'Kubo',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Sydney',
            'first_name' => 'Newman',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Matt',
            'first_name' => 'Duffer',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        // Supposons que 'name' représente 'last_name' et 'first_name' concaténés
        Creator::create([
            'last_name' => 'James',
            'first_name' => 'Cameron',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Brad',
            'first_name' => 'Wright',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Gene',
            'first_name' => 'Roddenberry',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'J.R.R.',
            'first_name' => 'Tolkien',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => '1973-09-02', // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Lana et Lilly',
            'first_name' => 'Wachowski',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Robert',
            'first_name' => 'Kirkman',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        // Supposons que 'name' représente 'last_name' et 'first_name' concaténés
        Creator::create([
            'last_name' => 'Fabian',
            'first_name' => 'Nicieza',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Hajime',
            'first_name' => 'Isayama',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Adam',
            'first_name' => 'Reed',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Jim',
            'first_name' => 'Starlin',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Akira',
            'first_name' => 'Toriyama',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Masashi',
            'first_name' => 'Kishimoto',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'J.R.R.',
            'first_name' => 'Tolkien',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => '1973-09-02', // Ajoutez la date correcte ou laissez null
        ]);

        Creator::create([
            'last_name' => 'Lana et Lilly',
            'first_name' => 'Wachowski',
            'date_de_naissance' => null, // Ajoutez la date correcte ou laissez null
            'date_de_deces' => null, // Ajoutez la date correcte ou laissez null
        ]);
    }
}
