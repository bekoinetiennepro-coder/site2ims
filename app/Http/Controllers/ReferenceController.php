<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReferenceController extends Controller
{
    /**
     * Liste
     */
    public function index()
    {
        $references = Reference:: all();

        return view(
            'admin.references.index',
            compact('references')
        );
    }

    /**
     * Formulaire création
     */
    public function create()
    {
        return view('admin.references.create');
    }

    /**
     * Enregistrer
     */
    public function store(Request $request)
    {
        $data = $request->validate([

           
            'logo'      => 'required|image|mimes:png,jpg,jpeg,webp|max:4096'

        ]);

        if($request->hasFile('logo')){

            $data['logo'] = $request
                    ->file('logo')
                    ->store('references','public');

        }


        Reference::create($data);

        return redirect()
            ->route('admin.references.index')
            ->with(
                'success',
                'Reference ajoutée avec succès.'
            );
    }

    /**
     * Edition
     */
    public function edit(Reference $reference)
    {
        return view(
            'admin.references.edit',
            compact('reference')
        );
    }

    /**
     * Mise à jour
     */
    public function update(Request $request, Reference $reference)
    {

        $data = $request->validate([

           
            'logo'     => 'nullable|image|mimes:png,jpg,jpeg,webp|max:4096'

        ]);

        if($request->hasFile('logo')){

            if($reference->logo){

                Storage::disk('public')
                    ->delete($reference->logo);

            }

            $data['logo'] = $request
                ->file('logo')
                ->store('references','public');

        }


        $reference->update($data);

        return redirect()
            ->route('admin.references.index')
            ->with(
                'success',
                'Reference modifiée avec succès.'
            );
    }

    /**
     * Suppression
     */
    public function destroy(Reference $reference)
    {

        if($reference->logo){

            Storage::disk('public')
                ->delete($reference->logo);

        }

        $reference->delete();

        return back()->with(
            'success',
            'Reference supprimée.'
        );
    }
}