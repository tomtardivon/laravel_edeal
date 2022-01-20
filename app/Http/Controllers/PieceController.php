<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Piece;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    //
  public function __construct() { 
      $this->middleware('auth'); 
  } 

      
  public function store(Request $request){ 
          
    $piece = Piece::create(['nom_piece'=>$request->get('nom_piece'),'description_piece'=>$request->get('description_piece')]);        
    $piece->saveTags($request->get('tag_piece'));
    return redirect()->route('showbiblio');

  }


  private function renderIdex($pieceQuery) {
     $pieces = $pieceQuery->with('tags')->paginate(10);    
     $tags= Tag::all();     
     $max = Tag::max('piece_count');
     return view('apprenant.biblio',[
      'pieces'=> $pieces,
      'tags'=>$tags,
      'max_tags'=>$max
      
     ]);
     

  }

  public function showbiblio()
  {  
     
      return $this->renderIdex((new Piece())->newQuery());
      

  }

  public function tag($slug)
  {
    $tag = Tag::where('slug',$slug)->first();
    return $this->renderIdex($tag->pieces()); 
  }


  public function edit(Piece $piece){
    $piece;
    return view('pieces.edit_piece',['piece'=>$piece]);

  }

  public function delete(Piece $piece){
    $piece->delete();
    return redirect()->route('piece.showbiblio')->with('success','piece delete');

  }

  public function update(Request $request , Piec $piece){
    $piece->update($request->all());
    $piece->saveTags($request->get('tags'));
    return redirect()->route('piece.showbiblio')->with('success','piece enregister');

  }
}
