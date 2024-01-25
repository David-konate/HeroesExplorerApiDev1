<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Ajoutez toutes les autres propriétés que vous souhaitez autoriser
    ];

    // Dans votre modèle Skill
public function heroes()
{
    return $this->belongsToMany(Hero::class, 'hero_skill', 'skill_id', 'hero_id');
}

}
