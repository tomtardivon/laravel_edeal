<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutoriel extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom_tuto',
        'description_tuto',
        'tag_tuto',
        'auteur_tuto',
        'notation_tuto',
        'difficulte_tuto',
        'duree_tuto',
    ];
}
