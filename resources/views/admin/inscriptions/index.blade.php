@extends('admin.layouts.app')

@section('title', 'Gestion des inscriptions')

@section('content')

<div class="max-w-7xl mx-auto">


<!-- Titre -->
<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-3xl font-bold text-gray-800">
            📝 Gestion des inscriptions
        </h1>

        <p class="text-gray-500 mt-1">
            Suivi des demandes de formation
        </p>

    </div>

</div>

<!-- Statistiques -->

<div class="grid md:grid-cols-4 gap-6 mb-8">

    <div class="bg-white p-6 rounded-xl shadow">

        <h3 class="text-gray-500 text-sm">
            Total
        </h3>

        <p class="text-3xl font-bold">
            {{ $inscriptions->count() }}
        </p>

    </div>

    <div class="bg-yellow-50 p-6 rounded-xl shadow">

        <h3 class="text-yellow-700 text-sm">
            En attente
        </h3>

        <p class="text-3xl font-bold text-yellow-600">
            {{ $inscriptions->where('statut','En attente')->count() }}
        </p>

    </div>

    <div class="bg-green-50 p-6 rounded-xl shadow">

        <h3 class="text-green-700 text-sm">
            Validées
        </h3>

        <p class="text-3xl font-bold text-green-600">
            {{ $inscriptions->where('statut','Validée')->count() }}
        </p>

    </div>

    <div class="bg-red-50 p-6 rounded-xl shadow">

        <h3 class="text-red-700 text-sm">
            Refusées
        </h3>

        <p class="text-3xl font-bold text-red-600">
            {{ $inscriptions->where('statut','Refusée')->count() }}
        </p>

    </div>

</div>

<!-- Recherche -->

<div class="bg-white rounded-xl shadow p-4 mb-6">

    <form method="GET">

        <input type="text"
               name="search"
               value="{{ request('search') }}"
               placeholder="Rechercher une inscription..."
               class="w-full border rounded-lg px-4 py-3">

    </form>

</div>

<!-- Tableau -->

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>

                <th class="text-left p-4">
                    Formation
                </th>

                <th class="text-left p-4">
                    Type
                </th>

                <th class="text-left p-4">
                    Demandeur
                </th>

                <th class="text-left p-4">
                    Téléphone
                </th>

                <th class="text-left p-4">
                    Email
                </th>

                <th class="text-left p-4">
                    Statut
                </th>

                <th class="text-center p-4">
                    Actions
                </th>

            </tr>

        </thead>

        <tbody>

            @forelse($inscriptions as $inscription)

            <tr class="border-t hover:bg-gray-50">

                <td class="p-4">
                    {{ $inscription->formation->titre }}
                </td>

                <td class="p-4">

                    @if($inscription->type == 'Entreprise')

                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs">
                            Entreprise
                        </span>

                    @else

                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs">
                            Particulier
                        </span>

                    @endif

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
                    {{ $inscription->email }}
                </td>

                <td class="p-4">

                    @if($inscription->statut == 'Validée')

                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs">
                            Validée
                        </span>

                    @elseif($inscription->statut == 'Refusée')

                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs">
                            Refusée
                        </span>

                    @else

                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs">
                            En attente
                        </span>

                    @endif

                </td>

                <td class="p-4">

                    <div class="flex justify-center gap-2">

                        <a href="{{ route('admin.inscriptions.show',$inscription) }}"
                           class="px-3 py-2 bg-blue-600 text-white rounded-lg">

                            Voir

                        </a>

                        <form action="{{ route('admin.inscriptions.valider',$inscription) }}"
                              method="POST">

                            @csrf
                            @method('PATCH')

                            <button class="px-3 py-2 bg-green-600 text-white rounded-lg">

                                Valider

                            </button>

                        </form>

                        <form action="{{ route('admin.inscriptions.refuser',$inscription) }}"
                              method="POST">

                            @csrf
                            @method('PATCH')

                            <button class="px-3 py-2 bg-yellow-500 text-white rounded-lg">

                                Refuser

                            </button>

                        </form>

                        <form action="{{ route('admin.inscriptions.destroy',$inscription) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button onclick="return confirm('Supprimer ?')"
                                    class="px-3 py-2 bg-red-600 text-white rounded-lg">

                                Supprimer

                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="7"
                    class="text-center py-10 text-gray-500">

                    Aucune inscription trouvée.

                </td>

            </tr>

            @endforelse

        </tbody>

    </table>

</div>

<div class="mt-6">

    {{ $inscriptions->links() }}

</div>


</div>

@endsection
