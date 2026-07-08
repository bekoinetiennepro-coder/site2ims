<?php

namespace App\Http\Controllers;

use App\Models\Parametre;
use Illuminate\Http\Request;

class ParametreController extends Controller
{
      /**
     * Afficher les paramètres
     */
    public function index()
    {
        $parametre = Parametre::first();

        // Si aucun enregistrement n'existe, on en crée un
        if (!$parametre) {

            $parametre = Parametre::create([
                'adresse'      => '',
                'telephone'    => '',
                'whatsapp'     => '',
                'email'        => '',
                'email_support'=> '',
                'horaire'      => '',
                'google_maps'  => '',
            ]);
        }

        return view(
            'admin.parametres.index',
            compact('parametre')
        );
    }

    /**
     * Formulaire de modification
     */
    public function edit()
    {
        $parametre = Parametre::first();

        if (!$parametre) {

            $parametre = Parametre::create([
                'adresse'      => '',
                'telephone'    => '',
                'whatsapp'     => '',
                'email'        => '',
                'email_support'=> '',
                'horaire'      => '',
                'google_maps'  => '',
            ]);
        }

        return view(
            'admin.parametres.edit',
            compact('parametre')
        );
    }

    /**
     * Mise à jour
     */
    public function update(Request $request)
    {

        $data = $request->validate([

            'adresse'       => 'required',

            'telephone'     => 'required',

            'whatsapp'      => 'nullable',

            'email'         => 'required|email',

            'email_support' => 'nullable|email',

            'horaire'       => 'nullable',

            'google_maps'   => 'nullable',

        ]);

        $parametre = Parametre::first();

        if (!$parametre) {

            Parametre::create($data);

        } else {

            $parametre->update($data);

        }

        return redirect()
            ->route('admin.parametres.index')
            ->with(
                'success',
                'Les paramètres ont été mis à jour avec succès.'
            );
    }

}
