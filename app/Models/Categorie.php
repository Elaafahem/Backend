<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    //aandi ha9 na3tihom hajet
    protected $fillable = [
        "nomCategorie",
        "imageCategorie"
    ];
    public function scategories()
    {
        return $this->hasMany(Scategorie::class, "categorieID");
    }
}
