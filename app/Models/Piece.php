<?php

namespace App\Models;


use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Piece extends Model
{
    use HasFactory;
    use \App\Concern\Taggable;
    
 /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */     
    
   

    protected $fillable = [
        'nom_piece',
        'description_piece',
        'image_piece',
        'modele3D',
        'modele2D',
        'tag',
        'type_piece',
    ];


    public $timestamps =false;


    
   







}
