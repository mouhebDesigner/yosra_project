<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\EtudiantRequest;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $enseignants = User::where('role', 'jury')->where('approuver', 1)->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.enseignants.index', compact('enseignants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enseignants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EtudiantRequest $request)
    {
        $enseignant = User::create($request->except(['password']));

        $enseignant->password = Hash::make($request->password);

        $enseignant->save();


        return redirect('admin/enseignants')->with('added', 'L\'enseignant a été ajouté avec succés');
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
    public function edit(User $enseignant)
    {

        return view('admin.enseignants.edit', compact('enseign$enseignant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $enseignant)
    {


        $validations_password = "";
        if(!is_null($request->password) ){
            
            $validations_password = "required | string | min:8 | confirmed";
        }
        $request->validate([
            'numtel' => "required | numeric | digits:8 | unique:users,numtel,".$enseignant->id.",id",
            "password" => $validations_password,
            "email" =>  "required | string | email | max:255 | unique:users,email,".$enseignant->id.",id",
            'nom' => 'required | string | max:255',
            'prenom' => 'required | string | max:255',
        ]);

        $enseignant->update($request->except(['password']));

        if(!is_null($request->password)){
            $enseignant->password = Hash::make($request->password);

            $enseignant->save();
        }

        



        return redirect('admin/enseignants')->with('updated', 'L\'enseignant a été modifié avec succés');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $enseignant)
    {
        $enseignant->delete();

        return response()->json([
            "deleted" => "L'enseignant a été supprimer avec succés"
        ]);
        
    }
}
