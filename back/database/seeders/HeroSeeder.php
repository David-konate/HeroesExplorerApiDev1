<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([
            'pseudo' => 'Superman',
            'first_name' => 'Clark',
            'last_name' => 'Kent',
            'creator_id' => 1, // ID du créateur (vous devrez ajuster cela en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (vous devrez ajuster cela en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (vous devrez ajuster cela en fonction de votre base de données)
            'race_id' => 1, // ID de la race (vous devrez ajuster cela en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (vous devrez ajuster cela en fonction de votre base de données)
            'first_appearance' => '1938-04-18', // Date de la première apparition
            'history' => 'Kal-El, also known as Superman, is a fictional character and superhero...', // Histoire
            'image_url' => 'https://example.com/superman.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        Hero::create([
            'pseudo' => 'Spiderman',
            'first_name' => 'Peter',
            'last_name' => 'Parker',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1962-08-10', // Date de la première apparition
            'history' => 'Peter Parker, also known as Spiderman, is a fictional character and superhero...', // Histoire
            'image_url' => 'https://example.com/spiderman.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        Hero::create([
            'pseudo' => 'Neo',
            'first_name' => 'Thomas',
            'last_name' => 'Anderson',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1999-03-31', // Date de la première apparition
            'history' => 'Neo, also known as Thomas Anderson, is a fictional character and the main protagonist...', // Histoire
            'image_url' => 'https://example.com/neo.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Iron Man (Tony Stark)
        Hero::create([
            'pseudo' => 'Iron Man',
            'first_name' => 'Tony',
            'last_name' => 'Stark',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1963-03-01', // Date de la première apparition
            'history' => 'Tony Stark, also known as Iron Man, is a fictional character and a superhero...', // Histoire
            'image_url' => 'https://example.com/ironman.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Captain America (Steve Rogers)
        Hero::create([
            'pseudo' => 'Captain America',
            'first_name' => 'Steve',
            'last_name' => 'Rogers',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1941-03-01', // Date de la première apparition
            'history' => 'Steve Rogers, also known as Captain America, is a fictional character and a super-soldier...', // Histoire
            'image_url' => 'https://example.com/captainamerica.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Thor
        Hero::create([
            'pseudo' => 'Thor',
            'first_name' => 'Thor',
            'last_name' => '', // Pas de nom de famille
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1962-08-01', // Date de la première apparition
            'history' => 'Thor is a fictional character and a superhero based on the Norse deity of the same name...', // Histoire
            'image_url' => 'https://example.com/thor.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Hulk (Bruce Banner)
        Hero::create([
            'pseudo' => 'Hulk',
            'first_name' => 'Bruce',
            'last_name' => 'Banner',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1962-05-01', // Date de la première apparition
            'history' => 'Bruce Banner, also known as Hulk, is a fictional character and a superhero...', // Histoire
            'image_url' => 'https://example.com/hulk.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Black Widow (Natasha Romanoff)
        Hero::create([
            'pseudo' => 'Black Widow',
            'first_name' => 'Natasha',
            'last_name' => 'Romanoff',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1964-04-01', // Date de la première apparition
            'history' => 'Natasha Romanoff, also known as Black Widow, is a fictional character and a spy...', // Histoire
            'image_url' => 'https://example.com/blackwidow.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Black Panther (T'Challa)
        Hero::create([
            'pseudo' => 'Black Panther',
            'first_name' => 'T\'Challa',
            'last_name' => '', // Pas de nom de famille
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1966-07-01', // Date de la première apparition
            'history' => 'T\'Challa, also known as Black Panther, is a fictional character and the king of Wakanda...', // Histoire
            'image_url' => 'https://example.com/blackpanther.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Doctor Strange (Stephen Strange)
        Hero::create([
            'pseudo' => 'Doctor Strange',
            'first_name' => 'Stephen',
            'last_name' => 'Strange',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1963-07-01', // Date de la première apparition
            'history' => 'Stephen Strange, also known as Doctor Strange, is a fictional character and a sorcerer...', // Histoire
            'image_url' => 'https://example.com/doctorstrange.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Wolverine (Logan)
        Hero::create([
            'pseudo' => 'Wolverine',
            'first_name' => 'Logan',
            'last_name' => '', // Pas de nom de famille
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1974-10-01', // Date de la première apparition
            'history' => 'Logan, also known as Wolverine, is a fictional character and a mutant with enhanced abilities...', // Histoire
            'image_url' => 'https://example.com/wolverine.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Deadpool (Wade Wilson)
        Hero::create([
            'pseudo' => 'Deadpool',
            'first_name' => 'Wade',
            'last_name' => 'Wilson',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1991-02-01', // Date de la première apparition
            'history' => 'Wade Wilson, also known as Deadpool, is a fictional character and an antihero...', // Histoire
            'image_url' => 'https://example.com/deadpool.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Venom (Eddie Brock)
        Hero::create([
            'pseudo' => 'Venom',
            'first_name' => 'Eddie',
            'last_name' => 'Brock',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1984-05-01', // Date de la première apparition
            'history' => 'Eddie Brock, also known as Venom, is a fictional character and a supervillain...', // Histoire
            'image_url' => 'https://example.com/venom.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Deadpool (Wade Wilson)
        Hero::create([
            'pseudo' => 'Deadpool',
            'first_name' => 'Wade',
            'last_name' => 'Wilson',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 3, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1991-02-01', // Date de la première apparition
            'history' => 'Wade Wilson, also known as Deadpool, is a fictional character and an antihero...', // Histoire
            'image_url' => 'https://example.com/deadpool.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Thanos
        Hero::create([
            'pseudo' => 'Thanos',
            'first_name' => '',
            'last_name' => '', // Pas de nom de famille
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 3, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1973-02-01', // Date de la première apparition
            'history' => 'Thanos is a fictional character and a supervillain appearing in comic books...', // Histoire
            'image_url' => 'https://example.com/thanos.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Loki
        Hero::create([
            'pseudo' => 'Loki',
            'first_name' => '',
            'last_name' => '', // Pas de nom de famille
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 3, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1962-08-01', // Date de la première apparition
            'history' => 'Loki is a fictional character and a supervillain appearing in comic books...', // Histoire
            'image_url' => 'https://example.com/loki.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Magnéto
        Hero::create([
            'pseudo' => 'Magnéto',
            'first_name' => '',
            'last_name' => '', // Pas de nom de famille
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 3, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1963-09-01', // Date de la première apparition
            'history' => 'Magnéto is a fictional character and a supervillain appearing in comic books...', // Histoire
            'image_url' => 'https://example.com/magneto.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Green Goblin (Norman Osborn)
        Hero::create([
            'pseudo' => 'Green Goblin',
            'first_name' => 'Norman',
            'last_name' => 'Osborn',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1964-07-01', // Date de la première apparition
            'history' => 'Norman Osborn, also known as Green Goblin, is a fictional character and a supervillain...', // Histoire
            'image_url' => 'https://example.com/greengoblin.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Red Skull (Johann Schmidt)
        Hero::create([
            'pseudo' => 'Red Skull',
            'first_name' => 'Johann',
            'last_name' => 'Schmidt',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 1, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1941-03-01', // Date de la première apparition
            'history' => 'Johann Schmidt, also known as Red Skull, is a fictional character and a supervillain...', // Histoire
            'image_url' => 'https://example.com/redskull.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Son Goku
        Hero::create([
            'pseudo' => 'Son Goku',
            'first_name' => 'Goku',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 3, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 2, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1984-11-20', // Date de la première apparition
            'history' => 'Son Goku is a fictional character and the main protagonist of the Dragon Ball manga...', // Histoire
            'image_url' => 'https://example.com/songoku.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Vegeta
        Hero::create([
            'pseudo' => 'Vegeta',
            'first_name' => 'Vegeta',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 3, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 2, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1989-11-24', // Date de la première apparition
            'history' => 'Vegeta is a fictional character and a prince of the Saiyan race in the Dragon Ball manga...', // Histoire
            'image_url' => 'https://example.com/vegeta.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Gohan
        Hero::create([
            'pseudo' => 'Gohan',
            'first_name' => 'Gohan',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 3, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 2, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1988-11-24', // Date de la première apparition
            'history' => 'Gohan is a fictional character and the eldest son of Son Goku in the Dragon Ball manga...', // Histoire
            'image_url' => 'https://example.com/gohan.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Frieza
        Hero::create([
            'pseudo' => 'Frieza',
            'first_name' => 'Frieza',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 3, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 2, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1990-02-15', // Date de la première apparition
            'history' => 'Frieza is a fictional character and one of the main antagonists in the Dragon Ball manga...', // Histoire
            'image_url' => 'https://example.com/frieza.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Cell
        Hero::create([
            'pseudo' => 'Cell',
            'first_name' => 'Cell',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 3, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 2, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1992-04-24', // Date de la première apparition
            'history' => 'Cell is a fictional character and one of the main antagonists in the Dragon Ball manga...', // Histoire
            'image_url' => 'https://example.com/cell.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Majin Buu
        Hero::create([
            'pseudo' => 'Majin Buu',
            'first_name' => 'Majin',
            'last_name' => 'Buu',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 3, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 2, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1994-01-04', // Date de la première apparition
            'history' => 'Majin Buu is a fictional character and one of the main antagonists in the Dragon Ball manga...', // Histoire
            'image_url' => 'https://example.com/majinbuu.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Monkey D. Luffy
        Hero::create([
            'pseudo' => 'Monkey D. Luffy',
            'first_name' => 'Monkey',
            'last_name' => 'D. Luffy',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 3, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1997-07-22', // Date de la première apparition
            'history' => 'Monkey D. Luffy is the main protagonist of the One Piece manga and the captain of the Straw Hat Pirates...', // Histoire
            'image_url' => 'https://example.com/monkeydluffy.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Roronoa Zoro
        Hero::create([
            'pseudo' => 'Roronoa Zoro',
            'first_name' => 'Roronoa',
            'last_name' => 'Zoro',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 3, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1997-07-22', // Date de la première apparition
            'history' => 'Roronoa Zoro is a swordsman and one of the main characters in the One Piece manga...', // Histoire
            'image_url' => 'https://example.com/roronoazoro.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Nami
        Hero::create([
            'pseudo' => 'Nami',
            'first_name' => 'Nami',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 3, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 3, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1997-07-22', // Date de la première apparition
            'history' => 'Nami is the navigator of the Straw Hat Pirates and a central character in the One Piece manga...', // Histoire
            'image_url' => 'https://example.com/nami.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Usopp
        Hero::create([
            'pseudo' => 'Usopp',
            'first_name' => 'Usopp',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 3, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 3, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1997-07-22', // Date de la première apparition
            'history' => 'Usopp is the sharpshooter of the Straw Hat Pirates and a character in the One Piece manga...', // Histoire
            'image_url' => 'https://example.com/usopp.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Sanji
        Hero::create([
            'pseudo' => 'Sanji',
            'first_name' => 'Sanji',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 3, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1997-07-22', // Date de la première apparition
            'history' => 'Sanji is the chef of the Straw Hat Pirates and a character in the One Piece manga...', // Histoire
            'image_url' => 'https://example.com/sanji.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Trafalgar Law
        Hero::create([
            'pseudo' => 'Trafalgar Law',
            'first_name' => 'Trafalgar',
            'last_name' => 'Law',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 3, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 3, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '2008-01-21', // Date de la première apparition
            'history' => 'Trafalgar Law is a pirate and a member of the Worst Generation in the One Piece manga...', // Histoire
            'image_url' => 'https://example.com/trafalgarlaw.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Kenshiro
        Hero::create([
            'pseudo' => 'Kenshiro',
            'first_name' => 'Kenshiro',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 5, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 4, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1983-09-13', // Date de la première apparition
            'history' => 'Kenshiro is the main protagonist of the Fist of the North Star manga and a master of Hokuto Shinken...', // Histoire
            'image_url' => 'https://example.com/kenshiro.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Seiya
        Hero::create([
            'pseudo' => 'Seiya',
            'first_name' => 'Seiya',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 5, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 4, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1986-12-18', // Date de la première apparition
            'history' => 'Seiya is the main protagonist of the Saint Seiya manga and the bearer of the Pegasus Cloth...', // Histoire
            'image_url' => 'https://example.com/seiya.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Shun
        Hero::create([
            'pseudo' => 'Shun',
            'first_name' => 'Shun',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 5, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 4, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1986-12-18', // Date de la première apparition
            'history' => 'Shun is one of the main characters in the Saint Seiya manga and the bearer of the Andromeda Cloth...', // Histoire
            'image_url' => 'https://example.com/shun.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Hyoga
        Hero::create([
            'pseudo' => 'Hyoga',
            'first_name' => 'Hyoga',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 5, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 4, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1986-12-18', // Date de la première apparition
            'history' => 'Hyoga is one of the main characters in the Saint Seiya manga and the bearer of the Cygnus Cloth...', // Histoire
            'image_url' => 'https://example.com/hyoga.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Shiryu
        Hero::create([
            'pseudo' => 'Shiryu',
            'first_name' => 'Shiryu',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 5, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 4, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1986-12-18', // Date de la première apparition
            'history' => 'Shiryu is one of the main characters in the Saint Seiya manga and the bearer of the Dragon Cloth...', // Histoire
            'image_url' => 'https://example.com/shiryu.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Ikki
        Hero::create([
            'pseudo' => 'Ikki',
            'first_name' => 'Ikki',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 5, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 4, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1986-12-18', // Date de la première apparition
            'history' => 'Ikki is one of the main characters in the Saint Seiya manga and the bearer of the Phoenix Cloth...', // Histoire
            'image_url' => 'https://example.com/ikki.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Doctor Who
        Hero::create([
            'pseudo' => 'Doctor Who',
            'first_name' => '',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 5, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1963-11-23', // Date de la première apparition
            'history' => 'The Doctor, a Time Lord from the planet Gallifrey, is the main character in the Doctor Who television series...', // Histoire
            'image_url' => 'https://example.com/doctorwho.jpg', // URL de l'image
            'identite_connue' => false, // Identité connue
        ]);

        // Jack O'Neil
        Hero::create([
            'pseudo' => 'Jack O\'Neil',
            'first_name' => 'Jack',
            'last_name' => 'O\'Neil',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 6, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1994-10-28', // Date de la première apparition
            'history' => 'Jack O\'Neil is a fictional character and the main protagonist in the Stargate SG-1 television series...', // Histoire
            'image_url' => 'https://example.com/jackoneil.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Teal'c
        Hero::create([
            'pseudo' => 'Teal\'c',
            'first_name' => 'Teal\'c',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 7, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1997-07-27', // Date de la première apparition
            'history' => 'Teal\'c is a fictional character and a Jaffa warrior in the Stargate SG-1 television series...', // Histoire
            'image_url' => 'https://example.com/tealc.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Captain James T. Kirk
        Hero::create([
            'pseudo' => 'Captain James T. Kirk',
            'first_name' => 'James T.',
            'last_name' => 'Kirk',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 8, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1966-09-08', // Date de la première apparition
            'history' => 'Captain James T. Kirk is the main character in the original Star Trek television series...', // Histoire
            'image_url' => 'https://example.com/captainkirk.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Spock
        Hero::create([
            'pseudo' => 'Spock',
            'first_name' => 'Spock',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 8, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1966-09-08', // Date de la première apparition
            'history' => 'Spock is a Vulcan officer in Starfleet and a main character in the original Star Trek television series...', // Histoire
            'image_url' => 'https://example.com/spock.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Jean-Luc Picard
        Hero::create([
            'pseudo' => 'Jean-Luc Picard',
            'first_name' => 'Jean-Luc',
            'last_name' => 'Picard',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 8, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1987-09-28', // Date de la première apparition
            'history' => 'Jean-Luc Picard is the captain of the USS Enterprise in Star Trek: The Next Generation television series...', // Histoire
            'image_url' => 'https://example.com/jeanlucpicard.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // William Riker
        Hero::create([
            'pseudo' => 'William Riker',
            'first_name' => 'William',
            'last_name' => 'Riker',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 3, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 8, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1987-09-28', // Date de la première apparition
            'history' => 'William Riker is the first officer of the USS Enterprise in Star Trek: The Next Generation television series...', // Histoire
            'image_url' => 'https://example.com/williamriker.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Data
        Hero::create([
            'pseudo' => 'Data',
            'first_name' => 'Data',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' =>4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 8, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1987-09-28', // Date de la première apparition
            'history' => 'Data is an android officer in Starfleet and a main character in Star Trek: The Next Generation television series...', // Histoire
            'image_url' => 'https://example.com/data.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Luke Skywalker
        Hero::create([
            'pseudo' => 'Luke Skywalker',
            'first_name' => 'Luke',
            'last_name' => 'Skywalker',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 9, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1977-05-25', // Date de la première apparition
            'history' => 'Luke Skywalker is a central character in the Star Wars saga and a Jedi Knight...', // Histoire
            'image_url' => 'https://example.com/lukeskywalker.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Princess Leia
        Hero::create([
            'pseudo' => 'Princess Leia',
            'first_name' => 'Leia',
            'last_name' => 'Organa',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 9, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1977-05-25', // Date de la première apparition
            'history' => 'Princess Leia Organa is a key figure in the Rebel Alliance and a central character in the Star Wars saga...', // Histoire
            'image_url' => 'https://example.com/princessleia.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Han Solo
        Hero::create([
            'pseudo' => 'Han Solo',
            'first_name' => 'Han',
            'last_name' => 'Solo',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 10, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1977-05-25', // Date de la première apparition
            'history' => 'Han Solo is a skilled pilot and smuggler, known for his role in the Rebel Alliance in the Star Wars saga...', // Histoire
            'image_url' => 'https://example.com/hansolo.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Darth Vader
        Hero::create([
            'pseudo' => 'Darth Vader',
            'first_name' => 'Anakin',
            'last_name' => 'Skywalker',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 3, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 9, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1977-05-25', // Date de la première apparition
            'history' => 'Darth Vader, formerly Anakin Skywalker, is a central antagonist in the Star Wars saga...', // Histoire
            'image_url' => 'https://example.com/darthvader.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Yoda
        Hero::create([
            'pseudo' => 'Yoda',
            'first_name' => 'Yoda',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 5, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 11, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1980-05-21', // Date de la première apparition
            'history' => 'Yoda is a wise and powerful Jedi Master in the Star Wars saga, known for his small size and great wisdom...', // Histoire
            'image_url' => 'https://example.com/yoda.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Obi-Wan Kenobi
        Hero::create([
            'pseudo' => 'Obi-Wan Kenobi',
            'first_name' => 'Obi-Wan',
            'last_name' => 'Kenobi',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 9, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1977-05-25', // Date de la première apparition
            'history' => 'Obi-Wan Kenobi is a legendary Jedi Knight and mentor in the Star Wars saga, known for his wisdom and combat skills...', // Histoire
            'image_url' => 'https://example.com/obiwankenobi.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Neo / Thomas Anderson
        Hero::create([
            'pseudo' => 'Neo',
            'first_name' => 'Thomas',
            'last_name' => 'Anderson',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 12, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1999-03-31', // Date de la première apparition
            'history' => 'Neo, also known as Thomas Anderson, is the central character in the Matrix film series, chosen to free humanity from the Matrix...', // Histoire
            'image_url' => 'https://example.com/neo.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Trinity
        Hero::create([
            'pseudo' => 'Trinity',
            'first_name' => '',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 4, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 13, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1999-03-31', // Date de la première apparition
            'history' => 'Trinity is a skilled hacker and freedom fighter in the Matrix film series, known for her combat abilities and determination...', // Histoire
            'image_url' => 'https://example.com/trinity.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Morpheus
        Hero::create([
            'pseudo' => 'Morpheus',
            'first_name' => '',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 2, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 13, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1999-03-31', // Date de la première apparition
            'history' => 'Morpheus is the captain of the Nebuchadnezzar and a key character in the Matrix film series, known for his belief in the prophecy of the One...', // Histoire
            'image_url' => 'https://example.com/morpheus.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
        // Sterling Archer
        Hero::create([
            'pseudo' => 'Sterling Archer',
            'first_name' => 'Sterling',
            'last_name' => 'Archer',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 9, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '2009-09-17', // Date de la première apparition
            'history' => 'Sterling Archer is the main character in the animated television series Archer, known for his espionage adventures...', // Histoire
            'image_url' => 'https://example.com/sterlingarcher.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Frodo Baggins
        Hero::create([
            'pseudo' => 'Frodo Baggins',
            'first_name' => 'Frodo',
            'last_name' => 'Baggins',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 3, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 3, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 10, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1954-07-29', // Date de la première apparition
            'history' => 'Frodo Baggins is the main protagonist in J.R.R. Tolkien\'s The Lord of the Rings trilogy, known for his quest to destroy the One Ring...', // Histoire
            'image_url' => 'https://example.com/frodobaggins.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Aragorn
        Hero::create([
            'pseudo' => 'Aragorn',
            'first_name' => 'Aragorn',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 1, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 1, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 11, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1954-07-29', // Date de la première apparition
            'history' => 'Aragorn is a key character in J.R.R. Tolkien\'s The Lord of the Rings trilogy, known for his role as the ranger, warrior, and king...', // Histoire
            'image_url' => 'https://example.com/aragorn.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);

        // Sauron
        Hero::create([
            'pseudo' => 'Sauron',
            'first_name' => 'Sauron',
            'last_name' => '',
            'creator_id' => 1, // ID du créateur (ajustez en fonction de votre base de données)
            'category_id' => 5, // ID de la catégorie (ajustez en fonction de votre base de données, si nécessaire)
            'alignment_id' => 2, // ID de l'alignement (ajustez en fonction de votre base de données)
            'race_id' => 12, // ID de la race (ajustez en fonction de votre base de données)
            'user_id' => 1, // ID de l'utilisateur (ajustez en fonction de votre base de données)
            'first_appearance' => '1954-07-29', // Date de la première apparition
            'history' => 'Sauron is the primary antagonist in J.R.R. Tolkien\'s The Lord of the Rings trilogy, known for his quest for dominion and the One Ring...', // Histoire
            'image_url' => 'https://example.com/sauron.jpg', // URL de l'image
            'identite_connue' => true, // Identité connue
        ]);
    }
}
