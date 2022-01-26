<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Piece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



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
     $pieces = $pieceQuery->with('tags')->paginate(9);    
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
    return view('pieces.new_piece',['piece'=>$piece]);

  }

  public function edite($id)
  {
   
      $edit_piece =  Piece::find($id);
     
      $tags= Tag::all(); 
      $tags = DB::table('piece_tag')
            ->join('tags', 'piece_tag.tag_id', '=', 'tags.id')
            ->where('piece_tag.piece_id', $id)
            ->value('tags.name');
          
      return view('pieces.edit_piece')->with(array(
        "edit_piece"=>$edit_piece,
        "tags"=>$tags,

    ));
  }

  public function details($id)
  {

      $details_piece =  Piece::find($id);
      $tags= Tag::all(); 
      $tags = DB::table('piece_tag')
            ->join('tags', 'piece_tag.tag_id', '=', 'tags.id')
            ->where('piece_tag.piece_id', $id)
            ->value('tags.name');
          
      return view('pieces.details_piece')->with(array(
        "details_piece"=>$details_piece,
        "tags"=>$tags,

    ));
  }

  public function pieces_details_3d($id)
  {

      $details_piece3d =  Piece::find($id);
        
      return view('pieces.details_piece3d')->with(array(
        "details_piece3d"=>$details_piece3d,


    ));
  }
  public function delete($id_delete){

    $deleted_piece= Piece::find($id_delete);
    $deleted_piece->delete();
    return back()->with('success','piece delete');
    

  }

  public function update(Request $request, $id){
    $piece = Piece::find($id);
    $piece->nom_piece = $request->get('nom_piece');
    $piece->description_piece = $request->get('description_piece');

    if($request->image_piece) {

      $filename_image_piece = time().'.'.$request->image_piece->extension();

      $path_image_piece = $request->image_piece->storeAs(
        'images/piéces/illustration',
        $filename_image_piece,
        'public'
    );
    
    $piece->image_piece = $path_image_piece;

    }
    
    if($request->modele3D) {

      $filename_modele3D = time().'.'.$request->modele3D->extension();

      $path_model3D_piece = $request->modele3D->storeAs(
        'images/piéces/modele3D',
        $filename_modele3D,
        'public'
    );

    $piece->modele3D = $path_model3D_piece;
    }

    if($request->modele2D ) {

      $filename_modele2D = time().'.'.$request->modele2D->extension();


    $path_model2D_piece = $request->modele2D->storeAs(
      'images/piéces/modele2D',
      $filename_modele2D,
      'public'
    );    
    
    $piece->modele2D = $path_model2D_piece;

    }
    
   /*  $piece->path_image_piece = $request->get('image_piece');
    $piece->path_model3D_piece = $request->get('modele3D');
    $piece->path_model2D_piece = $request->get('modele2D'); */

    $piece->save();
    $piece->saveTags($request->get('tag_piece'));


    return redirect()->route('showbiblio');

  }

  public function showprofil_update(Request $request)
  {
      $id =  Auth::user()->id ;

      $User = User::find($id);
      $User->name = $request->get('name');
      $User->email = $request->get('email');

      $User->save();
      return redirect('apprenant_profilapprenant')->with('success','Vos changements ont bien été effectués.');
  }

  public function search()
  {
    $q = request()->input('q');
    $pieces = Piece::where('nom_piece','like',"%$q%")
    ->orWhere('description_piece','like',"%$q%")
    ->paginate(6);
    $tags= Tag::all();
    

    return view('pieces.search_piece')->with(array(
      "pieces"=>$pieces,
      "tags"=>$tags,
      "q"=>$q

  ));
  }


  
  public function showpiece()
  {

  }
}


