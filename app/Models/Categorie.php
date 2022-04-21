<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorie extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ["label"];
    public function sujets(){
        return $this->hasMany(Sujet::class);
    }
    
    public function events(){
        return $this->hasMany(Event::class);
    }

}
