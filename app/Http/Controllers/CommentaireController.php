<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;
use App\Http\Requests\CommentaireRequest;

class CommentaireController extends Controller
{
    public function store(Request $request){
        $comment = Commentaire::create($request->all());

        return redirect('forums/'.$comment->sujet_id);
    }

     

   

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        $forum = $commentaire->sujet;
        return view('commentaires.edit', compact('commentaire', 'forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentaireRequest $request, Commentaire $commentaire)
    {
        $commentaire->update($request->all());
        return redirect('forums/'.$commentaire->sujet->id)->with('updated', 'Le commentaire à été modifié avec succée');
        
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        
        return response()->json([
            "deleted" => "Commentaire à été supprimé"
        ]);
    }
}
