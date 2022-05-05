<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Formation;
use Illuminate\Http\Request;
use App\Http\Requests\FormationRequest;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\FormationUpdateRequest;

class FormationController extends Controller
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
        $formations = Formation::paginate(10);

        return view('admin.formations.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(formationRequest $request)
    {
        $formation = Formation::create($request->all());

        
        if($request->hasFile('image')){
            $formation->image = $request->image->store('images');
            $formation->save();
        }
        
        return redirect('admin/formations')->with('created', 'L\'évèenement à été crée avec succée');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {

        return view('admin.formations.edit', compact('Formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FormationUpdateRequest $request, Formation $formation)
    {
        $formation->update($request->all());
        if($request->hasFile('image')){
            $formation->image = $request->image->store('images');
            $formation->save();
        }
        return redirect('admin/Formations')->with('updated', 'La formation à été modifié avec succée');
        
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        $formation->delete();

        return response()->json([
            "deleted" => "formation est supprimé"
        ]);
    }
}
