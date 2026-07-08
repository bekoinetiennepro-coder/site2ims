<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Liste des messages
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);

        return view(
            'admin.contacts.index',
            compact('contacts')
        );
    }

    /**
     * Voir un message
     */
    public function show(Contact $contact)
    {
        if ($contact->statut == 'Non lu') {

            $contact->update([
                'statut' => 'Lu'
            ]);

        }

        return view(
            'admin.contacts.show',
            compact('contact')
        );
    }

    /**
     * Supprimer
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()
            ->route('admin.contacts.index')
            ->with(
                'success',
                'Message supprimé.'
            );
    }
}