<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function FormCategorie(){
        return view('Categorie.categorie');
    }
    
    public function AddCategorie(Request $request){
        $request->validate([
            'categorie' => 'required',
        ]);
        $cat=new Categorie();
        $cat->nomCat=$request->categorie;
        $cat->save();
    }

    public function Liste(){
        $categories = Categorie::all();
        return view('Categorie.ListeCategorie', compact('categories'));
    }

}
