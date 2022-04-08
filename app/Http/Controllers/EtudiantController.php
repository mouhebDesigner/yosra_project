<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EtudiantRequest;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $etudiants = User::where('role', 'etudiant')->where('approuver', 1)->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.etudiants.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.etudiants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtudiantRequest $request)
    {
        $etudiant = User::create($request->except(['password']));

        $etudiant->password = Hash::make($request->password);

        $etudiant->save();


        return redirect('admin/etudiants')->with('added', 'L\'étudiant a été ajouté avec succés');
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
    public function edit(User $etudiant)
    {

        return view('admin.etudiants.edit', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $etudiant)
    {


        $validations_password = "";
        if(!is_null($request->password) ){
            
            $validations_password = "required | string | min:8 | confirmed";
        }
        $request->validate([
            'numtel' => "required | numeric | digits:8 | unique:users,numtel,".$etudiant->id.",id",
            "password" => $validations_password,
            "email" =>  "required | string | email | max:255 | unique:users,email,".$etudiant->id.",id",
            'nom' => 'required | string | max:255',
            'prenom' => 'required | string | max:255',
        ]);

        $etudiant->update($request->except(['password']));

        if(!is_null($request->password)){
            $etudiant->password = Hash::make($request->password);

            $etudiant->save();
        }

        



        return redirect('admin/etudiants')->with('updated', 'L\'étudiant a été modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $etudiant)
    {
        $etudiant->delete();

        return response()->json([
            "deleted" => "La fournisseur a été supprimer avec succés"
        ]);
        
    }
}
