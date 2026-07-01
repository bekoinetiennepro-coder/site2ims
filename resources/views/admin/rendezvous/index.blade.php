@extends('admin.layouts.app')

@section('title','Gestion des rendez-vous')

@section('content')

<div class="max-w-7xl mx-auto">

    <!-- Header -->

    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                📅 Gestion des rendez-vous
            </h1>

            <p class="text-gray-500 mt-1">
                Gérez les demandes de rendez-vous des clients.
            </p>

        </div>

    </div>

    <!-- Statistiques -->

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-blue-600">

            <p class="text-gray-500 text-sm">
                Total rendez-vous
            </p>

            <h2 class="text-4xl font-bold text-blue-600 mt-2">
                {{ $rendezvous->total() }}
            </h2>

        </div>

        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-yellow-500">

            <p class="text-gray-500 text-sm">
                En attente
            </p>

            <h2 class="text-4xl font-bold text-yellow-500 mt-2">
                {{ $rendezvous->where('statut','en_attente')->count() }}
            </h2>

        </div>

        <div class="bg-white rounded-2xl shadow-sm p-6 border-l-4 border-green-600">

            <p class="text-gray-500 text-sm">
                Confirmés
            </p>

            <h2 class="text-4xl font-bold text-green-600 mt-2">
                {{ $rendezvous->where('statut','confirme')->count() }}
            </h2>

        </div>

    </div>
 

    <!-- Tableau -->

    <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

        <div class="px-6 py-4 border-b">

            <h2 class="text-lg font-semibold text-gray-800">
                Liste des rendez-vous
            </h2>

        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead class="bg-gray-50">

                    <tr>

                        <th class="text-left px-6 py-4 font-semibold">
                            Client
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Téléphone
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Service
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Date
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Heure
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Statut
                        </th>

                        <th class="text-center px-6 py-4 font-semibold">
                            Actions
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($rendezvous as $rdv)

                        <tr class="border-b hover:bg-gray-50 transition">

                            <td class="px-6 py-4 font-medium">
                                {{ $rdv->nom }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $rdv->telephone }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $rdv->service }}
                            </td>

                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($rdv->date_rdv)->format('d/m/Y') }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $rdv->heure_rdv }}
                            </td>

                            <td class="px-6 py-4">

                                @if($rdv->statut == 'en_attente')

                                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-medium">
                                        ⏳ En attente
                                    </span>

                                @elseif($rdv->statut == 'confirme')

                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                                        ✅ Confirmé
                                    </span>

                                @else

                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-medium">
                                        ❌ Annulé
                                    </span>

                                @endif

                            </td>

                            <td class="px-6 py-4">

                                <div class="flex items-center justify-center gap-3">

                                    <a href="{{ route('admin.rendezvous.show',$rdv) }}"
                                       class="bg-blue-100 text-blue-700 px-3 py-2 rounded-lg hover:bg-blue-200">

                                        👁 Voir

                                    </a>

                                    @if($rdv->statut == 'en_attente')

                                        <form method="POST"
                                              action="{{ route('admin.rendezvous.confirmer',$rdv) }}">

                                            @csrf
                                            @method('PATCH')

                                            <button
                                                class="bg-green-100 text-green-700 px-3 py-2 rounded-lg hover:bg-green-200">

                                                ✔ Confirmer

                                            </button>

                                        </form>

                                        <form method="POST"
                                              action="{{ route('admin.rendezvous.annuler',$rdv) }}">

                                            @csrf
                                            @method('PATCH')

                                            <button
                                                class="bg-red-100 text-red-700 px-3 py-2 rounded-lg hover:bg-red-200">

                                                ✖ Annuler

                                            </button>

                                        </form>

                                    @endif

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="7"
                                class="text-center py-12 text-gray-500">

                                Aucun rendez-vous trouvé.

                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

    <!-- Pagination -->

    <div class="mt-8">

        {{ $rendezvous->links() }}

    </div>

</div>

@endsection