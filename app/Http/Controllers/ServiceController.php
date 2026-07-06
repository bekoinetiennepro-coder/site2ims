<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Liste des services
     */
    public function index()
    {
        $services = Service::orderBy('ordre')->paginate(10);

        return view('admin.services.index', compact('services'));
    }

    /**
     * Formulaire d'ajout
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Enregistrement
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'titre'       => 'required|max:255',
            'icone'       => 'nullable|max:100',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'ordre'       => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request
                ->file('image')
                ->store('services', 'public');
        }

        $data['actif'] = $request->has('actif');

        Service::create($data);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service ajouté avec succès.');
    }

    /**
     * Affichage
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Formulaire de modification
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Mise à jour
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->validate([
            'titre'       => 'required|max:255',
            'icone'       => 'nullable|max:100',
            'description' => 'required',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'ordre'       => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {

            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }

            $data['image'] = $request
                ->file('image')
                ->store('services', 'public');
        }

        $data['actif'] = $request->has('actif');

        $service->update($data);

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service modifié avec succès.');
    }

    /**
     * Suppression
     */
    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service supprimé avec succès.');
    }
}