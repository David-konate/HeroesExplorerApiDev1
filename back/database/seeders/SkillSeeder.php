<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Liste des compétences à insérer
        $skills = [
            'Ninjutsu',
            'Pouvoirs de Sage des Six Chemins',
            'Rasengan',
            'Sharingan',
            'Rinnegan',
            'Chidori',
            'Force surhumaine',
            'Agilité surhumaine',
            'Bouclier en vibranium',
            'Contrôle de Mjolnir (marteau magique)',
            'Manipulation de la foudre',
            'Invulnérabilité',
            'Guérison régénératrice',
            'Expert en arts martiaux',
            'Maître de l\'espionnage',
            'Habileté au tir',
            'Costume en vibranium',
            'Sens et agilité améliorés',
            'Maîtrise des arts mystiques',
            'Manipulation du temps',
            'Distorsion de la réalité',
            'Facteur de guérison régénératif',
            'Griffes en adamantium',
            'Conscience de la quatrième dimension',
            'Costume symbiotique',
            'Marche sur les murs',
            'Intellect de génie',
            'Maîtrise de l\'énergie cosmique',
            'Manipulation de la magie',
            'Métamorphose',
            'Illusions',
            'Manipulation du magnétisme',
            'Contrôle des objets métalliques',
            'Vol électromagnétique',
            'Armes à thème de gobelins',
            'Vol (avec planeur)',
            'Compétences avancées en combat',
            'Stratège de génie',
            'Ninjutsu médical',
            'Contrôle amélioré du chakra',
            'Techniques de Libération de la Foudre',
            'Copie de jutsu',
            'sharigan',
            'Spider-Sense',
            'Superhuman strength',
            'Wall-crawling',
            'Iron Man Suit',
            'Genius-level intellect',
            'Super soldier abilities',
            'Vibranium suit',
            'Mjolnir (magical hammer)',
            'Control over lightning',
            'Hulk transformation',
            'Expert martial artist and spy',
            'Superhuman agility and marksmanship',
            'Enhanced senses and strength',
            'Mystic arts mastery, Time manipulation',
            'Reality manipulation',
            'Regenerative healing factor',
            'Adamantium claws',
            'Fourth-dimensional awareness',
            'Symbiote suit',
            'Symbiote abilities',
            'Superhuman strength and durability',
            'Illusions and shape-shifting',
            'Magnetic manipulation',
            'Control over metal objects',
            'Electromagnetic flight',
            'Ninjutsu',
            'Six Paths Sage Mode',
            'Rasengan',
            'Sharingan',
            'Rinnegan',
            'Chidori',
            'Superhuman strength',
            'Superhuman agility',
            'Vibranium shield',
            'Mjolnir control',
            'Lightning manipulation',
            'Invulnerability',
            'Regenerative healing',
            'Martial arts expertise',
            'Spying skills',
            'Marksmanship',
            'Vibranium suit',
            'Enhanced senses and agility',
            'Mystical arts mastery',
            'Time manipulation',
            'Reality distortion',
            'Regenerative healing factor',
            'Adamantium claws',
            'Fourth-dimensional awareness',
            'Symbiote suit',
            'Zanpakuto abilities',
            'Kido spells',
            'Bankai transformation',
            'Senbonzakura (cherry blossom blade) techniques',
            'Combat skills and spiritual energy sensing',
            'Hollowfication',
            'Hollow abilities and spiritual energy absorption',
            'Soul Society leadership and spiritual energy manipulation',
            'Enhanced strength and combat skills',
            'Swordsmanship and high spiritual energy',
            'Kido spells and spiritual pressure',
            'Zanpakuto mastery and flash steps',
            'Combat skills and spiritual energy sensing',
            'Kenjutsu (swordsmanship)',
            'Zanjutsu (sword fighting) and Kido',
            'Bankai transformation and spiritual pressure',
            'Master swordsman and spiritual energy manipulation',
            'Combat proficiency and spiritual energy sensing',
            'Zanpakuto abilities and Bankai transformation',
            'Kido spells and spiritual pressure',
            'Kenjutsu and spiritual energy manipulation',
            'Swordsmanship and spiritual pressure',
            'Hollow transformation and combat skills',
            'Kido mastery and spiritual pressure',
            'Martial arts and spiritual energy sensing',
            'Combat skills and spiritual energy manipulation',
        ];

        // Insertion des compétences dans la base de données
        foreach ($skills as $skillName) {
            Skill::create(['name' => $skillName]);
        }
    }
}
