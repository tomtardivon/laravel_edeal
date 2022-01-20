<?php

namespace App\Models;

use App\Models\Piece;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    public $guarded = [];

    public $timestamps =false;

    public function pieces()
    {
        return $this->belongsToMany(Piece::class);
    }

    public static function removeUnused(){
        return static::where('piece_count',0)->delete();
    }
}
