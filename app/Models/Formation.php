<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        "titre",
        "description",
        "image",
        "date",
        "categorie_id",
    ];

    public function categorie(){
        return  $this->belongsTo(Categorie::class);
    }
}
