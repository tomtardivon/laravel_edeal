<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerbase extends Controller
{
    public function showprojet()
    { 
        return view('projet');  
    }
    public function search()
    { 
        return view('recherche');  
    }
    public function showmodel3D()
    { 
        return view('model3D');  
    }
    public function showbiblio()
    { 
        return view('biblio');  
    }
}
