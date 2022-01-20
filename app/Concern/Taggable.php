<?php
namespace  App\Concern;

use App\Models\Tag;
use \App\Observer\TaggableObserver;
use Illuminate\Support\Str;

trait Taggable {

    public static function bootTaggable(){
        static::observe(\App\Observer\TaggableObserver::class);
    }

    public function tags()
        {
            return $this->belongsToMany(Tag::class);
        }

    public function saveTags(string $tags) {

        //récuperation des tags à associer à l'articles
            $tags=array_filter(array_unique(array_map(function($item){
            return trim($item);
            }, explode(',',$tags))), function ($item) {
                return !empty($item);
            });

    

            //  récuperations des tags existant
            $persited_tags = Tag::WhereIn('name',$tags)->get();

            // Je trouve des tags qui étaient utilisés mais qui ne le sont plus
            
            // je trouve les nouveaux tag associer 

            //Je trouve les bouveaux tags , et je les insère en base
            $tags_to_create= array_diff($tags ,$persited_tags->pluck('name')->all());

            print_r($tags_to_create);

            $tags_to_create= array_map(function($tag){
                return [
                    'name'=>$tag,
                    'slug'=>Str::slug($tag),
                    'piece_count'=>1
                ];
            },$tags_to_create);

            print_r($tags_to_create);

            $created_tags=$this->tags()->createMany($tags_to_create);
            print_r($created_tags);
            $persited_tags = $persited_tags->merge($created_tags);

            $edit=$this->tags()->sync($persited_tags);

            Tag::whereIn('id',$edit['attached'])->increment('piece_count',1);
            Tag::whereIn('id',$edit['detached'])->decrement('piece_count',1);
            Tag::removeUnused();
            

    }
}
