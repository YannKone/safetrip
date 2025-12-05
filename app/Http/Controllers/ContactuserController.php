<?php

namespace App\Http\Controllers;


use App\Models\Contactuser;
use Illuminate\Http\Request;
use App\Mail\Contactmailclass;
use App\Mail\Contactconfirmation;

use Illuminate\Support\Facades\Mail;

class ContactuserController extends Controller
{
    public function saveuser(Request $request)
    {
        // // Validation des données
        // $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'email' => 'required|email|unique:contacts',
        // ]);
          // Récupération des données du formulaire
        $nameUser = $request->input('nameUser');
        $email = $request->input('email');
        $objetUser = $request->input('objetUser');
        $messageUser =  $request->input('messageUser');
        

        // Enregistrement des données dans la base de données
        $contact = new Contactuser;
        $contact->nameuser = $nameUser;
        $contact->email = $email;
        $contact->objetuser = $objetUser;
        $contact->messageuser = $messageUser;
        
        
      $debug=  $contact->save();
    //   dd($debug);

    
    Mail::to('yannkone0@gmail.com')->send(new Contactmailclass($contact->toArray()));
    Mail::to($request->input('email'))->send(new Contactconfirmation($request->input('email')));


        // Affichage d'un message de confirmation
        return redirect()->back()->with('message', 'Votre message est déjà envoyé');
    }
    public function save(Request $request)
    {
        return response()->json(['message' => 'Données enregistrées avec succès !']); 
    }

    public function index()
    {
        $contact = Contactuser::all();
        return view('admin.contactrequestlist', compact('contact'));    }

        public function chartjs()
        {
            $contact = Contactuser::all();
            return view('chartjs', compact('contact')); // Passer $utilisateur à la vue
        }
}
    
