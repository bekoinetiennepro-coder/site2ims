@extends('admin.layouts.app')

@section('title','Gestion de l\'équipe')

@section('content')

<div class="max-w-7xl mx-auto">

    <!-- En-tête -->
    <div class="flex flex-col md:flex-row justify-between md:items-center gap-6 mb-8">

        <div>

            <h1 class="text-4xl font-bold text-gray-800 flex items-center gap-3">
                👥 Gestion de l'équipe
            </h1>

            <p class="text-gray-500 mt-2">
                Gérez les membres de l'équipe affichés sur le site internet.
            </p>

        </div>

        <a href="{{ route('admin.equipes.create') }}"
           class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition">

            ➕ Ajouter un membre

        </a>

    </div>

    <!-- Messages -->
    @if(session('success'))

        <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-6 py-4 text-green-700">

            ✅ {{ session('success') }}

        </div>

    @endif

    <!-- Tableau -->
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">

        <div class="px-8 py-5 border-b bg-gray-50">

            <h2 class="text-xl font-semibold text-gray-800">

                Liste des collaborateurs

            </h2>

        </div>

        <div class="overflow-x-auto">

            <table class="min-w-full">

                <thead class="bg-slate-800 text-white">

                    <tr>

                        <th class="px-6 py-4 text-left">Photo</th>
                        <th class="px-6 py-4 text-left">Nom</th>
                        <th class="px-6 py-4 text-left">Poste</th>
                        <th class="px-6 py-4 text-left">Email</th>
                        <th class="px-6 py-4 text-center">Ordre</th>
                        <th class="px-6 py-4 text-center">Statut</th>
                        <th class="px-6 py-4 text-center">Actions</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($equipes as $membre)

                    <tr class="border-b hover:bg-blue-50 transition">

                        <td class="px-6 py-4">

                            @if($membre->photo)

                                <img src="{{ asset('storage/'.$membre->photo) }}"
                                     class="w-16 h-16 rounded-full object-cover border-4 border-blue-100 shadow">

                            @else

                                <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center text-2xl">

                                    👤

                                </div>

                            @endif

                        </td>

                        <td class="px-6 py-4">

                            <div class="font-bold text-gray-800">

                                {{ $membre->nom }}

                            </div>

                        </td>

                        <td class="px-6 py-4">

                            <span class="text-gray-600">

                                {{ $membre->poste }}

                            </span>

                        </td>

                        <td class="px-6 py-4 text-gray-600">

                            {{ $membre->email ?: '-' }}

                        </td>

                        <td class="px-6 py-4 text-center">

                            <span class="inline-flex w-10 h-10 items-center justify-center rounded-full bg-indigo-100 text-indigo-700 font-bold">

                                {{ $membre->ordre }}

                            </span>

                        </td>

                        <td class="px-6 py-4 text-center">

                            @if($membre->actif)

                                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-100 text-green-700 font-semibold">

                                    🟢 Actif

                                </span>

                            @else

                                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-100 text-red-700 font-semibold">

                                    🔴 Inactif

                                </span>

                            @endif

                        </td>

                        <td class="px-6 py-4">

                            <div class="flex justify-center gap-3">

                                <a href="{{ route('admin.equipes.edit',$membre) }}"
                                   class="px-4 py-2 rounded-lg bg-amber-500 hover:bg-amber-600 text-white transition shadow">

                                    ✏ Modifier

                                </a>

                                <form action="{{ route('admin.equipes.destroy',$membre) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Voulez-vous vraiment supprimer ce membre ?')"
                                        class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white transition shadow">

                                        🗑 Supprimer

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7">

                            <div class="py-16 text-center">

                                <div class="text-7xl mb-4">

                                    👥

                                </div>

                                <h3 class="text-2xl font-bold text-gray-700">

                                    Aucun membre enregistré

                                </h3>

                                <p class="text-gray-500 mt-2">

                                    Cliquez sur <strong>Ajouter un membre</strong> pour créer votre équipe.

                                </p>

                                <a href="{{ route('admin.equipes.create') }}"
                                   class="inline-flex mt-6 px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold">

                                    ➕ Ajouter un membre

                                </a>

                            </div>

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

    <!-- Pagination -->
    <div class="mt-8">

        {{ $equipes->links() }}

    </div>

</div>

@endsection