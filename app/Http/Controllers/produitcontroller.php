<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Produit;
use App\Models\Image;

use App\Models\Categorie;
use App\Models\Produitcara;
use App\Models\Caracteristique;

use Illuminate\Http\Request;

class produitcontroller extends Controller
{
    //

    public function formproduct(){


        // Passer les options à la vue

        $categories = Categorie::all();
        $options = Caracteristique::all();

        return view('produit/formproduit', ['categorie' => $categories,'caracteristique' => $options]);
    }




    public function AddProduit(Request $request){
        $request->validate([
            'libelle' => 'required',
            'prix' => 'required',
            'categorie' => 'required',
            'qtte' => 'required',
            'description' => 'required',
            'image' => 'required',
            'caracteristique' => 'required',

        ]);
       
        $prod=new Produit();
        $prod->libelle=$request->libelle;
        $prod->prix=$request->prix;
        $prod->categorie_id=$request->categorie;
        $prod->qttestock=$request->qtte;
        $prod->description=$request->description;
        $res=$prod->save();

        if($request->hasFile('image')){
$images=$request->file('image');


foreach($images as $ims){
    $imges=new Image();

    $imagenew=time().'_'.$ims->getClientOriginalName();
    $destination=public_path('photos');
    if(!file_exists($destination)){
       $p= mkdir($destination,0775,true);
    }
    $ims->move($destination,$imagenew);
    $imges->nom=$imagenew;
    $maxId = Produit::max('id');
        $imges->produit_id=$maxId;
        $res4=$imges->save();
}
        }
$caracts=$request->caracteristique;
        foreach($caracts as $caract){
            $caracter=new Produitcara();
            $maxIdp = Produit::max('id');
            $maxIdc = Caracteristique::max('id');

                $caracter->produit_id=$maxIdp;
                $caracter->caracteristique_id=$maxIdc;

                $res5=$caracter->save();
        
        
        }

       
       if($res && $res4 && $res5){
        return redirect()->route('formproduct')->with('successaddp', ' product added Successfully');

       }
       else{
        return redirect()->route('formproduct')->with('failaddp', ' product not added Successfully please verify product informations');

       }
    }



    public function ListeP(){
        $produits = Produit::with(['Caracteristique', 'Categorie', 'Images'])->get();
        return view('guestcontain', compact('produits'));
    }

    public function searchprodupd($id){
        $produits = Produit::find($id);
        $categories = Categorie::all();
        $options = Caracteristique::all();
        return view('produit.formprodmod', compact('produits','categories','options'));
    }

}
