<?php

namespace App\Http\Controllers\apprenant;

use App\Models\Piece;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('apprenant.profilapprenant');  
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
