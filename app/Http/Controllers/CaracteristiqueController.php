<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caracteristique;

class CaracteristiqueController extends Controller
{
    public function FormCaracteristique(){
        return view('Caracteristique.caracteristique');
    }
    
    public function AddCaracteristique(Request $request){
        $request->validate([
            'caracteristique' => 'required',
        ]);
        $car=new Caracteristique();
        $car->nomCaract=$request->caracteristique;
        $car->save();
    }

    

}
