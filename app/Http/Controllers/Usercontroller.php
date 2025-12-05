<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    public function saveuser (Request $request)
        {
            $name = $request->input("name");
            $email = $request->input("email");
            $passworld = $request->input("passworld");
            
            $user = new user;
            $user->name = $name;
            $user->email = $email;
            $user->passworld = $passworld;

            $user->save();
            return redirect()->back()->with('message', 'Votre demande de Demo a été enregistré');

        }
        public function save(Request $request)
    {
        return response()->json(['message' => 'compte enregistré !']); 
    }
    public function contacts()
    {
        $user = user::all();
        return view('contacts', compact('user')); // Passer $utilisateur à la vue
    }
}
