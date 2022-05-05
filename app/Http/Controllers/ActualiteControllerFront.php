<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteControllerFront extends Controller
{
    public function index(){
        $actualites = Actualite::paginate(10);
        return view('actualites.index', compact('actualites'));
    }

    public function show(Actualite $actualite){
        return view('actualites.show', compact('actualite'));
    }
}
