<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }

    public function edit(){
        return view('updateProfile');
    }

    public function update(ProfileRequest $request){

        Auth::user()->update($request->except('password'));

        return redirect('profile')->with('updated', 'Votre profile a été modifié avec succée');
    }
}
