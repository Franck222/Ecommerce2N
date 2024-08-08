<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class produitcontroller extends Controller
{
    //

    public function formproduct(){


        $options = User::all(); // Utilisez une requête appropriée pour vos besoins
        // Passer les options à la vue
        return view('formproduit', ['options' => $options]);
    }


    public function listuser(){

$tags=[];
if($search=$request->name){

$tags=User::where('name','Like','%$search%')->get();

}
return response()->json($tags);

    }

}
