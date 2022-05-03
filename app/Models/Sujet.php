<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sujet extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'titre', 'description', "categorie_id", "user_id"
    ];
    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
