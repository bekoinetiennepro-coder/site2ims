@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-7xl mx-auto">

    <div class="mb-8">

        <h1 class="text-3xl font-bold text-gray-800">
            📊 Tableau de bord
        </h1>

        <p class="text-gray-500">
            Bienvenue sur l'administration 2IMS
        </p>

    </div>

    <!-- Cartes statistiques -->

    <div class="grid md:grid-cols-5 gap-6 mb-10">

        <div class="bg-white rounded-xl shadow p-6">

            <h3 class="text-gray-500 text-sm">
                Formations
            </h3>

            <p class="text-4xl font-bold text-blue-600">
                {{ $totalFormations }}
            </p>

        </div>

        <div class="bg-white rounded-xl shadow p-6">

            <h3 class="text-gray-500 text-sm">
                Inscriptions
            </h3>

            <p class="text-4xl font-bold text-indigo-600">
                {{ $totalInscriptions }}
            </p>

        </div>

        <div class="bg-yellow-50 rounded-xl shadow p-6">

            <h3 class="text-yellow-700 text-sm">
                En attente
            </h3>

            <p class="text-4xl font-bold text-yellow-600">
                {{ $enAttente }}
            </p>

        </div>

        <div class="bg-green-50 rounded-xl shadow p-6">

            <h3 class="text-green-700 text-sm">
                Validées
            </h3>

            <p class="text-4xl font-bold text-green-600">
                {{ $validees }}
            </p>

        </div>

        <div class="bg-red-50 rounded-xl shadow p-6">

            <h3 class="text-red-700 text-sm">
                Refusées
            </h3>

            <p class="text-4xl font-bold text-red-600">
                {{ $refusees }}
            </p>

        </div>

    </div>

    <!-- Dernières inscriptions -->

    <div class="bg-white rounded-xl shadow">

        <div class="p-6 border-b">

            <h2 class="text-xl font-semibold">
                📝 Dernières inscriptions
            </h2>

        </div>

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="text-left p-4">
                        Formation
                    </th>

                    <th class="text-left p-4">
                        Demandeur
                    </th>

                    <th class="text-left p-4">
                        Téléphone
                    </th>

                    <th class="text-left p-4">
                        Statut
                    </th>

                </tr>

            </thead>

            <tbody>

                @foreach($dernieresInscriptions as $inscription)

                    <tr class="border-t">

                        <td class="p-4">
                            {{ $inscription->formation->titre }}
                        </td>

                        <td class="p-4">

                            @if($inscription->type == 'Entreprise')

                                {{ $inscription->entreprise }}

                            @else

                                {{ $inscription->nom }}
                                {{ $inscription->prenoms }}

                            @endif

                        </td>

                        <td class="p-4">
                            {{ $inscription->telephone }}
                        </td>

                        <td class="p-4">

                            @if($inscription->statut == 'Validée')

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">
                                    Validée
                                </span>

                            @elseif($inscription->statut == 'Refusée')

                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
                                    Refusée
                                </span>

                            @else

                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                                    En attente
                                </span>

                            @endif

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection