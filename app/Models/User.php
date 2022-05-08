<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'numtel',
        'password',
        'date_naissance',
        'description'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sujets(){
        return $this->hasMany(Sujet::class);
    }
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    public function isAdmin(){
        return Auth::user()->role == "admin";
    }
    public function isStudent(){
        return Auth::user()->role == "etudiant";
    }

    public function setPassword(){
        dd('lmkaehjdkjaedae');
    }
    public function setEmail(){
        dd('lmkaehjdkjaedae');
    }
}
