<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function store(Request $request){
        $comment = Commentaire::create($request->all());

        return redirect('forums/'.$comment->sujet_id);
    }
}
