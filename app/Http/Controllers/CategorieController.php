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
        $res=$cat->save();
        if($res){
            return redirect()->route('Categorie')->with('sucesscat', ' Category Added Succesfully ');
        }
        else{
            return redirect()->route('Categorie')->with('fail', ' Category Not Added Succesfully ');
        }
    }

    public function Liste(){
        $categories = Categorie::all();
        return view('Categorie.ListeCategorie', compact('categories'));
    }

    public function Supprimer($id){
       
        $categories = Categorie::find($id);
        $categories->delete();
        return redirect('/ListCategorie')->with('status','Categorie Supprimee avec succes');
        
    }

    public function Modifier($id){
        $categories = Categorie::find($id);
    //    dd($categories) ;
        return view('Categorie.EditCategorie', compact('categories'));
    }

    public function Update(Request $request){
        $request->validate([
            'categorie' => 'required',
        ]);
        $categories = Categorie::find($request->id);
        $categories->nomCat = $request->categorie;
        $categories->Update();
        return redirect('/ListCategorie')->with('statue','Categorie Modifiee avec succes');

    }


}
