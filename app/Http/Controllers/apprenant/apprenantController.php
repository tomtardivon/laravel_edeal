<?php

namespace App\Http\Controllers\apprenant;

use App\Models\Piece;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class apprenantController extends Controller
{
    public function __construct() { 
        $this->middleware('auth'); 
      } 
      public function index() { 
        return view('apprenant.acceuilapprenant'); 
      } 
    public function showprofil()
      {
          $id =  Auth::user()->id;
          return view('apprenant.profilapprenant');
      }

    public function showprofil_update(Request $request)
    {

        $id =  Auth::user()->id ;

        $User = User::find($id);

        
        if($request->avatar ) {

            $filename_image_avatar = time().'.'.$request->avatar->extension();

            $path_image_avatar = $request->avatar->storeAs(
                'images/avatar/',
                $filename_image_avatar,
                'public'
            );
            
        
            $User->avatar = $path_image_avatar;
    
        }

    
        $User->name = $request->get('name');
        $User->email = $request->get('email');
        

        $User->save();
        return redirect('apprenant_profilapprenant')->with('success','Vos changements ont bien été effectués.');

    }

    public function showcours()
    { 
        return view('apprenant.cours');  
    }
    public function showexcours()
    { 
        return view('apprenant.excours');  
    }


    public function showprojet()
    { 
        return view('apprenant.projet');  
    }
    public function search()
    { 
        return view('apprenant.recherche');  
    }
    public function showmodel3D()
    { 
        return view('apprenant.model3D');  
    }

    


    // public function showbiblio()
    // { 
    //     $pieces = Piece::with('tags')->get();
    //     return view('apprenant.biblio',[
    //         'pieces'=> $pieces
    //     ]); 

    // }
}
