<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    //

    public function signin(){
        return view('forminscription');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function login(){
        return view('formconnexion');
    }

    public function createuser(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',

        ]);
        $perso=new user();
        $perso->name=$request->name;
        $perso->email=$request->email;
        $perso->password=$request->password;
        $perso->statut="user";


        $perso->save();

        // $this->validator($request->all())->validate();

        // $user = $this->create($request->all());

        // // Connecter l'utilisateur ou rediriger
        // auth()->login($user);

        return redirect()->route('signin')->with('success', ' Successfully Sign in ');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'statut' => "user",

        ]);
    }

public function loginuser(Request $request){

$usera=$request->validate([
 "email"=>["required"],
 "password"=>["required"]

]);

if(Auth::attempt($usera)){

$request->session()->regenerate();

return redirect()->intended(route('acceuill'));


}
else{ 

    return redirect()->route('login')->with('fail', ' Incorrect credentials please try again ');

}

// $utitilisateur=User::where("email",$usera["email"])->first();
// if(!$utitilisateur) return view('welcome');
// if(!Hash::check($usera["password"],$utitilisateur->password)){

//     return view('welcome');
// }
// else {
//     return redirect()->route('acceuill');

// }
    }


    public function getOptions()
{
    $options = User::all(['id', 'name']); // ou toute autre colonne nécessaire
    return response()->json($options);
}
}


