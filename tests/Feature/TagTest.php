<?php

namespace Tests\Feature;

use App\Models\Tag;
use Tests\TestCase;
use App\Models\Piece;


use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagTest extends TestCase
{

    public function setUp():void {
        parent::setUp();
        Artisan::call('migrate');
    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateTags()
    {

        $piece = Piece::create(['nom_piece'=>'test','description_piece'=>'lorem']);
        $piece->saveTags('salut, chien,chat,chat , ');
        
        $this->assertEquals(3,Tag::count());   
        $this->assertEquals(1,Tag::first()->piece_count);   
        $this->assertEquals(3, DB::table('piece_tag')->count());

    }



    // public function testCreateTags()
    // {

    //     $piece = Piece::create(['nom_piece'=>'test','description_piece'=>'lorem']);
    //     $piece->saveTags('salut, chien,chat,chat , ');
        
    //     $this->assertEquals(3,Tag::count());   
    //     $this->assertEquals(3, DB::table('piece_tag')->count());

    // }





    public function testEmptyTags()
    {


        $piece = Piece::create(['nom_piece'=>'test','description_piece'=>'lorem']);
        $piece->saveTags('');        
        $this->assertEquals(0,Tag::count());   
     

    }



    public function testreuseTags(){

       $pieces = Piece::factory()->count(2)->create();
       $piece1 = $pieces->first();
       $piece2 = $pieces->last();

       $piece1->saveTags('salut ,chien,chat, , ');
       $piece2->saveTags('salut,chammeau ');

       $this->assertEquals(4,Tag::count());  
       
       $this->assertEquals(3, DB::table('piece_tag')->where('piece_id',$piece1->id)->count());
       $this->assertEquals(2, DB::table('piece_tag')->where('piece_id',$piece2->id)->count());
       $this->assertEquals(2,Tag::where('name','salut')->first()->piece_count);   
        

    }

    public function testPieceCountTags(){

        
       $pieces = Piece::factory()->count(2)->create();
       $piece1 = $pieces->first();
       $piece2 = $pieces->last();

       $piece1->saveTags('salut ,chien,chat');
       $piece2->saveTags('salut');
       $this->assertEquals(2,Tag::where('name','salut')->first()->piece_count);   
       $piece2->saveTags('chien');
       $this->assertEquals(2,Tag::where('name','chien')->first()->piece_count);   
       $this->assertEquals(1,Tag::where('name','salut')->first()->piece_count);   
     
    }


    public function testCleanUnusedTags(){

        $pieces = Piece::factory()->count(1)->create();
        $piece = $pieces->first();
        

        $piece->saveTags('salut ,chien,chat');
        $this->assertEquals(3,Tag::count()); 
        
        $piece->saveTags('salut ,chien,chat');
        $this->assertEquals(3,Tag::count());
 
    }


    public function testDeletPost (){

        $pieces = Piece::factory()->count(1)->create();
        $piece = $pieces->first();
        

        $piece->saveTags('salut ,chien,chat');
        $this->assertEquals(3,Tag::count());         
        $piece->delete();
        $this->assertEquals(0,Tag::count());

    }

}
