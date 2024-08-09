<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristique extends Model
{
    use HasFactory;

    protected $fillable = ['nomCaract'];

    public function produits(){
        return $this->hasMany(Produit::class);
    }

    public function produit()
    {
        return $this->belongsToMany(Produit::class,'produitcaras');
    }
}
