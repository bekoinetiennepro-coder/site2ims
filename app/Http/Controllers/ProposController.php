<?php

namespace App\Http\Controllers;

use App\Models\Propos;
use Illuminate\Http\Request;
use App\Models\Equipe;

class ProposController extends Controller
{



    public function accueil()
    {
        $equipes = Equipe::where(
            'actif',
            true
        )
        ->orderBy('ordre')
        ->get();

        return view(
            'pages.propos',
            compact('equipes')
        );
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Propos $propos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Propos $propos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Propos $propos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Propos $propos)
    {
        //
    }
}
