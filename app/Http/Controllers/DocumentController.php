<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Auth;
class DocumentController extends Controller
{
    public function index(){
        $documents = Document::paginate(10);

        if(Auth::check()){
            if(Auth::user()->isAdmin()){
                return view("admin.documents.index", compact('documents'));
            } else {
                return view("documents.index", compact('documents'));
            }
        } else {
            return view("documents.index", compact('documents'));
        }
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        if(Auth::user()->isAdmin()){
            return view("admin.documents.create");
        } else {
            return view("documents.create");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DocumentRequest $request)
    {
        $document = Document::create($request->all());

        return redirect('admin/documents')->with('created', 'Le catégorie à été crée avec succée');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {

        return view('admin.documents.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DocumentRequest $request, Document $document)
    {
        $document->update($request->all());
        return redirect('admin/documents')->with('updated', 'Le catégorie à été modifié avec succée');
        
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        $document->delete();
        
        return response()->json([
            "deleted" => "Catégorie à été supprimé"
        ]);
    }
}
