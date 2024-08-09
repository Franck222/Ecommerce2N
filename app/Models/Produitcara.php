<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produitcara extends Model
{
    use HasFactory;
    protected $fillable = ['produit_id','caracteristique_id'];

}
