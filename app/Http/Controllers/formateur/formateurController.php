<?php

namespace App\Http\Controllers\formateur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class formateurController extends Controller
{
    public function __construct() { 
        $this->middleware('auth'); 
      } 
      public function index() { 
        return view('formateur.acceuilformateur'); 
      } 
      public function showprofil()
    { 
        return view('formateur.profilformateur');  
    }
}
