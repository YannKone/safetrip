<?php

namespace App\Http\Controllers;
use App\Models\Newslettermodels;

use Illuminate\Http\Request;
use App\Mail\Newslettersclass;
use App\Mail\NewsletterConfirmation;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe (Request $request)
    {
        // $request->validate([
        //     'email2' => 'required|email|unique:newsletters,email2|regex:/^[^@]+@[^@]+\.[^@]+$/',
        // ]);
        // $request->validate([
        //     'email' => 'required|email|unique:newsletters,email',
        // ]);

        // NewsletterController::create([
        //     'email' => $request->email,
        // ]);
        $email2 = $request->input('email2');
        
        $utilisateur = new Newslettermodels;
        $utilisateur->email2 = $email2;

        $debug=  $utilisateur->save();



        Mail::to('yannkone0@gmail.com')->send(new Newslettersclass($utilisateur->toArray()));

        Mail::to($request->input('email2'))->send(new NewsletterConfirmation($request->input('email2')));

        return redirect()->back()->with('message-newsletter', 'Votre demande de Demo a été enregistré');
        

        
    }
    public function save(Request $request)
    {
        return response()->json(['messages' => 'Données enregistrées avec succès !']); 
    }

    public function index()
    {
        $utilisateur = Newslettermodels::all();
        return view('admin.newlettersrequestlist', compact('utilisateur'));    }
    
        
        public function compose()
        {
            $utilisateur = Newslettermodels::all();
            return view('compose', compact('utilisateur')); // Passer $utilisateur à la vue
        }
}


