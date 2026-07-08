<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Parametre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Service;
class ContactController extends Controller
{
    /**
     * Afficher la page contact
     */
  

    public function index()
    {
        $parametre = Parametre::first();

        $services = Service::where('actif',1)
            ->orderBy('ordre')
            ->get();

        return view('pages.contact', compact(
            'parametre',
            'services'
        ));
    }

    /**
     * Enregistrer le message
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'nom'         => 'required|string|max:255',

            'entreprise'  => 'nullable|string|max:255',

            'telephone'   => 'nullable|string|max:30',

            'email'       => 'required|email',

            'service'     => 'nullable|string|max:255',

            'message'     => 'required|string',

        ]);

        $contact = Contact::create($data);

        /*
        |--------------------------------------------------------------------------
        | Envoi du mail
        |--------------------------------------------------------------------------
        */

        $destinataire = Parametre::first()?->email ?? env('MAIL_FROM_ADDRESS');

        Mail::to($destinataire)
            ->send(new ContactMail($contact));

        return back()->with(
            'success',
            'Votre message a été envoyé avec succès.'
        );
    }
}