<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Sujet;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SujetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if(str_contains($request->path(), 'admin') && Auth::user()->isStudent()){
            abort(404);
        }
        if(session('created')){
            Alert::success('Success Title', session('created'));
        }
        if(session('updated')){
            Alert::success('Success Title', session('updated'));
        }
        $sujets = Sujet::paginate(10);

        return view('admin.sujets.index', compact('sujets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sujets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $sujet = Sujet::create($request->all());

        return redirect('admin/sujets')->with('created', 'Le sujet à été crée avec succée');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sujet $sujet)
    {
        return view('admin.sujets.edit', compact('sujet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sujet $sujet)
    {
        $sujet->update($request->all());
        if($request->hasFile('document')){
            foreach($request->document as $document){
                $sujet->document .= $document->store('uploads').",";
            }
        }
        $sujet->save();

        return redirect('admin/sujets')->with('updated', 'Le sujet a été modifié avec succée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sujet $sujet)
    {
        $sujet->delete();
        
        return response()->json([
            "deleted" => "Sujet à été supprimé"
        ]);
    }
}
