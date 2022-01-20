<?php

namespace App\Observer;

use App\Models\Tag;
use App\Models\Piece;


class TaggableObserver
{
    public function deleting(Piece $piece){
        $tags_id = $piece->tags->pluck('id');
        Tag::wherein('id',$tags_id)->decrement('piece_count',1);
        Tag::removeUnused();
      
    }
}