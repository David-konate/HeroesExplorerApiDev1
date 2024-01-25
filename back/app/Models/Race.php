<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', // Ajoutez toutes les autres propriétés que vous souhaitez autoriser
    ];
}
