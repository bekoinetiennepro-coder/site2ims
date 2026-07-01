<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendezvous = RendezVous::latest()
        ->paginate(15);

        return view(
            'admin.rendezvous.index',
            compact('rendezvous')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.rendez-vous');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([

            'nom' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',

            'entreprise' => 'nullable',

            'service' => 'required',

            'date_rdv' => 'required',

            'heure_rdv' => 'required',

            'message' => 'nullable',

        ]);

        RendezVous::create($data);

        return redirect()
            ->back()
            ->with(
                'success',
                'Votre demande de rendez-vous a été enregistrée.'
            );
    
    }

    /**
     * Display the specified resource.
     */
    // public function show(RendezVous $rendezVous)
    // {
        
    //     return view(
    //     'admin.rendezvous.show',
    //     compact('rendezVous')
    // );
    // }

    public function show($id)
    {
        $rendezVous = RendezVous::findOrFail($id);

        return view(
            'admin.rendezvous.show',
            compact('rendezVous')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RendezVous $rendezVous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RendezVous $rendezVous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        RendezVous $rendezvous
    )
    {
        $rendezvous->delete();

        return back()->with(
            'success',
            'Rendez-vous supprimé'
        );
    }

    public function confirmer(
        RendezVous $rendezvous
    )
    {
        $rendezvous->update([
            'statut' => 'confirme'
        ]);

        return back()->with(
            'success',
            'Rendez-vous confirmé'
        );
    }

    public function annuler(
     RendezVous $rendezvous
    )
    {
        $rendezvous->update([
            'statut' => 'annule'
        ]);

        return back()->with(
            'success',
            'Rendez-vous annulé'
        );
    }
}
