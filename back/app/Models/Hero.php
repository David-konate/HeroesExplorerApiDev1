<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'pseudo', 'first_name', 'last_name', 'first_appearance', 'history',
        'image_url', 'identite_connue', 'user_id', 'creator_id', 'race_id',
        'category_id', 'alignment_id', 'image_url',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function creator()
    {
        return $this->belongsTo(Creator::class);
    }

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function alignment()
    {
        return $this->belongsTo(Alignment::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'hero_skill', 'hero_id', 'skill_id');
    }
}
