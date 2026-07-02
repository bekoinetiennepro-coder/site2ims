<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $equipes = Equipe::latest()->paginate(10);

    return view(
        'admin.equipes.index',
        compact('equipes')
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.equipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'nom' => 'required',
            'poste' => 'required',

            'email' => 'nullable|email',

            'linkedin' => 'nullable',

            'ordre' => 'nullable|integer',

            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',

        ]);

        if($request->hasFile('photo')){

            $data['photo'] = $request
                ->file('photo')
                ->store('equipe','public');
        }
       
        Equipe::create($data);

        return redirect()
            ->route('admin.equipes.index')
            ->with('success','Membre ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipe $equipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipe $equipe)
    {
        return view('admin.equipes.edit', compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Equipe $equipe)
{
    $data = $request->validate([

        'nom'       => 'required|string|max:255',
        'poste'     => 'required|string|max:255',
        'email'     => 'nullable|email|max:255',
        'linkedin'  => 'nullable|string|max:255',
        'ordre'     => 'nullable|integer',
        'photo'     => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',

    ]);

    if ($request->hasFile('photo')) {

        if ($equipe->photo) {
            Storage::disk('public')->delete($equipe->photo);
        }

        $data['photo'] = $request
            ->file('photo')
            ->store('equipe', 'public');
    }

    // Etat actif
    $data['actif'] = $request->has('actif');

    $equipe->update($data);

    return redirect()
        ->route('admin.equipes.index')
        ->with('success', 'Le membre a été modifié avec succès.');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipe $equipe)
    {
        if($equipe->photo){
            Storage::disk('public')->delete($equipe->photo);
        }
        $equipe->delete();

        return redirect()
            ->route('admin.equipes.index')
            ->with('success','Membre supprimé');
    }
}
