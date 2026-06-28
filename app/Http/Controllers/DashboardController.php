<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Inscription;

class DashboardController extends Controller
{
    public function index()
    {
        $totalFormations = Formation::count();

        $totalInscriptions = Inscription::count();

        $enAttente = Inscription::where(
            'statut',
            'En attente'
        )->count();

        $validees = Inscription::where(
            'statut',
            'Validée'
        )->count();

        $refusees = Inscription::where(
            'statut',
            'Refusée'
        )->count();

        $dernieresInscriptions = Inscription::with('formation')
            ->latest()
            ->take(10)
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'totalFormations',
                'totalInscriptions',
                'enAttente',
                'validees',
                'refusees',
                'dernieresInscriptions'
            )
        );
    }
}