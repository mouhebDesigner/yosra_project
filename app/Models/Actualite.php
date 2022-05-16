<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    use HasFactory;
    protected $fillable = [
        "titre",
        "description",
        "image",
        "date",
        "categorie_id",
        "categorie_label"
    ];

    public function categorie(){
        return  $this->belongsTo(Categorie::class);
    }
}
