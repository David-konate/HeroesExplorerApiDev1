<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    use HasFactory;

    protected $fillable = [
       'first_name', 'last_name', 'date_de_naissance', 'date_de_naissance', 'image_url', 'content',
    ];
}
