<?php

namespace App\Http\Controllers;

use App\Models\Sujet;
use Illuminate\Http\Request;
use App\Http\Requests\ForumRequest;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forums = Sujet::all();
        return view('forums.index', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ForumRequest $request)
    {
        $forum = Sujet::create($request->all());
        if($request->hasFile('document')){
            foreach($request->document as $document){
                $forum->document .= $document->store('uploads').",";
            }
        }
        $forum->save();

        return redirect('forums')->with('created', 'Le sujet à été crée avec succée');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sujet $forum)
    {
        return view('forums.show', compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sujet $forum)
    {
        return view('forums.edit', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sujet $forum)
    {
        $forum->update($request->all());
        if($request->hasFile('document')){
            foreach($request->document as $document){
                $forum->document .= $document->store('uploads').",";
            }
        }
        $forum->save();
        return redirect('forums')->with('updated', 'Le sujet à été modifié avec succée');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sujet $forum)
    {
        $forum->delete();
        
        return response()->json([
            "deleted" => "Sujet à été supprimé"
        ]);
    }
    
    public function search(Request $request){
        $forums = 
        Sujet::where('titre', 'like',  '%'.$request->query('search').'%')
        ->orWhere('description', 'like',  '%'.$request->query('search').'%')
        ->get();
        
        return view('forums.index', compact('forums'));
        
    }
}
