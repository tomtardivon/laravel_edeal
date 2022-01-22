<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Piece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class PieceController extends Controller
{
    //
  public function __construct() { 
      $this->middleware('auth'); 
  } 

      
  public function store(Request $request){ 

   

    $filename_image_piece = time().'.'.$request->image_piece->extension();
    $filename_modele3D = time().'.'.$request->model3D_piece->extension();
    $filename_modele2D = time().'.'.$request->model2D_piece->extension();

    $path_image_piece = $request->image_piece->storeAs(
        'images/piéces/illustration',
        $filename_image_piece,
        'public'
    );

      $path_model3D_piece = $request->model3D_piece->storeAs(
        'images/piéces/modele3D',
        $filename_modele3D,
        'public'
    );

    $path_model2D_piece = $request->model2D_piece->storeAs(
      'images/piéces/modele2D',
      $filename_modele2D,
      'public'
    );



   

          
    $piece = Piece::create([
      'nom_piece'=>$request->get('nom_piece'),
      'description_piece'=>$request->get('description_piece'),
      'image_piece'=>$path_image_piece,
      'modele3D'=> $path_model3D_piece,
      'modele2D'=> $path_model2D_piece   

    ]);   
    
    
   
    $piece->saveTags($request->get('tag_piece'));
    return redirect()->route('showbiblio');

  }


  private function renderIdex($pieceQuery) {
     $pieces = $pieceQuery->with('tags')->paginate(12);    
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

  public function delete($id_delete){

    $deleted_piece= Piece::find($id_delete);
    $deleted_piece->delete();
    return back()->with('success','piece delete');
    

  }

  public function update(Request $request , Piece $piece){
    $piece->update($request->all());
    $piece->saveTags($request->get('tags'));
    return redirect()->route('piece.showbiblio')->with('success','piece enregister');

  }


  public function showpiece()
  {

  }
}


