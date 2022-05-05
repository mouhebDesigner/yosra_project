<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationControllerFront extends Controller
{
    public function index(){
        $formations = Formation::paginate(10);
        return view('formations.index', compact('formations'));
    }

    public function show(Formation $formation){
        return view('formations.show', compact('formation'));
    }
}
