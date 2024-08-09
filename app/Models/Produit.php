<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','categorie_id','description','prix','qttestock','is_active','in_stock','on_sale','is_featured'];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function caracteristique()
    {
        return $this->belongsToMany(Caracteristique::class,'produitcaras');
    }
}


