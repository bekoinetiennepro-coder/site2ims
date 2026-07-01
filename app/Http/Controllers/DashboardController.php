<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Inscription;
use App\Models\RendezVous;
use App\Models\User;
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

        $totalRdv = RendezVous::count();

        $rdvAttente = RendezVous::where(
            'statut',
            'en_attente'
        )->count();

        $rdvConfirmes = RendezVous::where(
            'statut',
            'confirme'
        )->count();

        $derniersRdv = RendezVous::latest()
        ->take(10)
        ->get();

        $totalUsers = User::count();
      
        return view(
            'admin.dashboard',
            compact(
                'totalFormations',
                'totalInscriptions',
                'enAttente',
                'validees',
                'refusees',
                'dernieresInscriptions',
                'totalRdv',
                'rdvAttente',
                'rdvConfirmes',
                'totalUsers',
                'derniersRdv'
            )
        );


        

    }
}