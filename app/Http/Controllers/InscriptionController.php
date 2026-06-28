<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
        $inscriptions = Inscription::with('formation')
            ->latest()
            ->paginate(15);

        return view(
            'admin.inscriptions.index',
            compact('inscriptions')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->type == 'Particulier')
        {
            $request->validate([
                'nom'=>'required',
                'prenoms'=>'required',
                'telephone'=>'required',
                'email'=>'required|email'
            ]);
        }
        else
        {
            $request->validate([
                'entreprise'=>'required',
                'libelle'=>'required',
                'nb_personnes'=>'required',
                'telephone'=>'required',
                'email'=>'required|email'
            ]);
        }

        Inscription::create($request->all());

        return back()->with(
            'success',
            'Votre inscription a été enregistrée.'
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        //
    }

     public function valider(Inscription $inscription)
    {
        $inscription->update([
            'statut' => 'Validée'
        ]);

        return back()->with(
            'success',
            'Inscription validée avec succès.'
        );
    }

    public function refuser(Inscription $inscription)
    {
        $inscription->update([
            'statut' => 'Refusée'
        ]);

        return back()->with(
            'success',
            'Inscription refusée.'
        );
    }
}
