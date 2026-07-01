@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="max-w-7xl mx-auto">

    <!-- En-tête -->

    <div class="mb-8">

        <h1 class="text-4xl font-bold text-gray-800">
            📊 Tableau de bord
        </h1>

        <p class="text-gray-500 mt-2">
            Bienvenue dans l'administration 2IMS
        </p>

    </div>

    <!-- Statistiques -->

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

        <div class="bg-gradient-to-r from-blue-500 to-blue-700 rounded-2xl shadow-lg p-6 text-white">

            <div class="flex justify-between items-center">

                <div>

                    <p class="opacity-80">
                        Formations
                    </p>

                    <h2 class="text-4xl font-bold">
                        {{ $totalFormations }}
                    </h2>

                </div>

                <span class="text-5xl">
                    🎓
                </span>

            </div>

        </div>

        <div class="bg-gradient-to-r from-green-500 to-green-700 rounded-2xl shadow-lg p-6 text-white">

            <div class="flex justify-between items-center">

                <div>

                    <p class="opacity-80">
                        Inscriptions
                    </p>

                    <h2 class="text-4xl font-bold">
                        {{ $totalInscriptions }}
                    </h2>

                </div>

                <span class="text-5xl">
                    📝
                </span>

            </div>

        </div>

        <div class="bg-gradient-to-r from-purple-500 to-purple-700 rounded-2xl shadow-lg p-6 text-white">

            <div class="flex justify-between items-center">

                <div>

                    <p class="opacity-80">
                        Rendez-vous
                    </p>

                    <h2 class="text-4xl font-bold">
                        {{ $totalRdv }}
                    </h2>

                </div>

                <span class="text-5xl">
                    📅
                </span>

            </div>

        </div>

        <div class="bg-gradient-to-r from-slate-500 to-slate-700 rounded-2xl shadow-lg p-6 text-white">

            <div class="flex justify-between items-center">

                <div>

                    <p class="opacity-80">
                        Utilisateurs
                    </p>

                    <h2 class="text-4xl font-bold">
                        {{ $totalUsers }}
                    </h2>

                </div>

                <span class="text-5xl">
                    👥
                </span>

            </div>

        </div>

    </div>

    <!-- Alertes -->

    <div class="grid md:grid-cols-4 gap-6 mb-10">

        <div class="bg-yellow-50 border border-yellow-200 rounded-2xl p-6">

            <h3 class="text-yellow-700 font-semibold">
                ⏳ Inscriptions en attente
            </h3>

            <p class="text-4xl font-bold text-yellow-600 mt-2">
                {{ $enAttente }}
            </p>

        </div>

        <div class="bg-green-50 border border-green-200 rounded-2xl p-6">

            <h3 class="text-green-700 font-semibold">
                ✅ Inscriptions validées
            </h3>

            <p class="text-4xl font-bold text-green-600 mt-2">
                {{ $validees }}
            </p>

        </div>

        <div class="bg-red-50 border border-red-200 rounded-2xl p-6">

            <h3 class="text-red-700 font-semibold">
                ❌ Inscriptions refusées
            </h3>

            <p class="text-4xl font-bold text-red-600 mt-2">
                {{ $refusees }}
            </p>

        </div>

        <div class="bg-purple-50 border border-purple-200 rounded-2xl p-6">

            <h3 class="text-purple-700 font-semibold">
                📅 RDV en attente
            </h3>

            <p class="text-4xl font-bold text-purple-600 mt-2">
                {{ $rdvAttente }}
            </p>

        </div>

    </div>

    <!-- Actions rapides -->

    <div class="bg-white rounded-2xl shadow-lg p-6 mb-10">

        <h2 class="text-2xl font-bold mb-6">
            🚀 Actions rapides
        </h2>

        <div class="grid md:grid-cols-4 gap-4">

            <a href="{{ route('admin.formations.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white p-5 rounded-xl text-center">

                ➕ Nouvelle formation

            </a>

            <a href="{{ route('admin.inscriptions.index') }}"
               class="bg-green-600 hover:bg-green-700 text-white p-5 rounded-xl text-center">

                📝 Inscriptions

            </a>

            <a href="{{ route('admin.rendezvous.index') }}"
               class="bg-purple-600 hover:bg-purple-700 text-white p-5 rounded-xl text-center">

                📅 Rendez-vous

            </a>

            <a href="{{ route('admin.users.index') }}"
               class="bg-slate-700 hover:bg-slate-800 text-white p-5 rounded-xl text-center">

                👥 Utilisateurs

            </a>

        </div>

    </div>

    <!-- Dernières inscriptions -->

    <div class="bg-white rounded-2xl shadow-lg mb-10 overflow-hidden">

        <div class="p-6 border-b">

            <h2 class="text-xl font-bold">
                📝 Dernières inscriptions
            </h2>

        </div>

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="p-4 text-left">Formation</th>
                    <th class="p-4 text-left">Demandeur</th>
                    <th class="p-4 text-left">Téléphone</th>
                    <th class="p-4 text-left">Statut</th>

                </tr>

            </thead>

            <tbody>

                @foreach($dernieresInscriptions as $inscription)

                    <tr class="border-t">

                        <td class="p-4">
                            {{ $inscription->formation->titre }}
                        </td>

                        <td class="p-4">
                            {{ $inscription->type == 'Entreprise'
                                ? $inscription->entreprise
                                : $inscription->nom.' '.$inscription->prenoms }}
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

    <!-- Derniers rendez-vous -->

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <div class="p-6 border-b">

            <h2 class="text-xl font-bold">
                📅 Derniers rendez-vous
            </h2>

        </div>

        <table class="w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="p-4 text-left">Nom</th>
                    <th class="p-4 text-left">Téléphone</th>
                    <th class="p-4 text-left">Date</th>
                    <th class="p-4 text-left">Statut</th>

                </tr>

            </thead>

            <tbody>

                @foreach($derniersRdv as $rdv)

                    <tr class="border-t">

                        <td class="p-4">
                            {{ $rdv->nom }}
                        </td>

                        <td class="p-4">
                            {{ $rdv->telephone }}
                        </td>

                        <td class="p-4">
                            {{ \Carbon\Carbon::parse($rdv->date_rdv)->format('d/m/Y') }}
                        </td>

                        <td class="p-4">

                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">
                                {{ $rdv->statut }}
                            </span>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection