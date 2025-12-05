<?php

namespace App\Http\Controllers;

use App\Models\demopagemodel;
use Illuminate\Http\Request;
use App\Mail\Demomailclass;
use Illuminate\Support\Facades\Mail;
use App\Mail\Democonfirmation;

class demopageController extends Controller
{
    
    public function enregistrer(Request $request)
    {
        // // Validation des données
        // $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'email' => 'required|email|unique:utilisateurs',
        // ]);
          // Récupération des données du formulaire
          $ID = $request->input('ID');
        $entreprise_name = $request->input('entreprise_name');
        $name = $request->input('name');
        $email = $request->input('email');
        $pays =  $request->input('pays');
        $num_tel =  $request->input('num_tel');
        $profession = $request->input('profession');
        $description = $request->input('description');



        
        
        
        

        // Enregistrement des données dans la base de données
        $utilisateur = new demopagemodel;
        $utilisateur->ID = $ID;
        $utilisateur->entreprise_name = $entreprise_name;
        $utilisateur->name = $name;
        $utilisateur->email = $email;
        $utilisateur->pays = $pays;
        $utilisateur->num_tel = $num_tel;
        $utilisateur->profession = $profession;
        $utilisateur->description = $description;
        
      $debug=  $utilisateur->save();
    //   dd($debug);

    Mail::to($request->input('email'))->send(new Democonfirmation($request->input('email')));
    Mail::to('yannkone0@gmail.com')->send(new Demomailclass($utilisateur->toArray()));

        // Affichage d'un message de confirmation
        return redirect()->back()->with('message-demo', 'Votre demande de Demo a été enregistré');
    }
    public function save(Request $request)
    {
        return response()->json(['message' => 'Données enregistrées avec succès !']); 
    }

    public function index()
    {
        $utilisateur = demopagemodel::all();
        return view('calendar', compact('calendar'));    }

        public function calendar()
        {
            $utilisateur = demopagemodel::all();
            return view('calendar', compact('utilisateur')); // Passer $utilisateur à la vue
        }

        public function updateStatus(Request $request)
        {
            $utilisateur = demopagemodel::find($request->id);
            if ($utilisateur) {
                $utilisateur->status = $request->status;
                $utilisateur->save();
        
                return response()->json(['success' => 'Statut mis à jour avec succès!']);
            }
        
            return response()->json(['error' => 'Erreur lors de la mise à jour du statut.'], 500);
        }
}
    

