@php
use Illuminate\Support\Str;
@endphp

@extends('admin.layouts.app')

@section('title','Gestion des Formations')

@section('content')

<div class="bg-white rounded-2xl shadow-sm p-6">


<!-- Header -->
<div class="flex items-center justify-between mb-6">

    <div>
        <h1 class="text-3xl font-bold text-gray-800">
            📚 Gestion des Formations
        </h1>
        <p class="text-gray-500 mt-1">
            Gérez les formations disponibles sur votre plateforme.
        </p>
    </div>

    <a href="{{ route('admin.formations.create') }}"
       class="inline-flex items-center px-5 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow transition">

        ➕ Nouvelle Formation

    </a>

</div>

<!-- Messages -->
@if(session('success'))
    <div class="mb-5 p-4 rounded-lg bg-green-100 border border-green-300 text-green-800">
        {{ session('success') }}
    </div>
@endif

<!-- Tableau -->
<div class="overflow-x-auto">

    <table class="w-full text-sm text-left">

        <thead class="bg-slate-800 text-white">
            <tr>

                <th class="px-6 py-4">Image</th>
                <th class="px-6 py-4">Titre</th>
                <th class="px-6 py-4">Durée</th>
                <th class="px-6 py-4">Prix</th>
                <th class="px-6 py-4">Statut</th>
                <th class="px-6 py-4 text-center">Actions</th>

            </tr>
        </thead>

        <tbody>

            @forelse($formations as $formation)

                <tr class="border-b hover:bg-gray-50 transition">

                    <td class="px-6 py-4">

                        @if($formation->image)

                            <img src="{{ asset('storage/'.$formation->image) }}"
                                 class="w-16 h-16 rounded-lg object-cover border">

                        @else

                            <div class="w-16 h-16 rounded-lg bg-gray-200 flex items-center justify-center">
                                📷
                            </div>

                        @endif

                    </td>

                    <td class="px-6 py-4">

                        <div class="font-semibold text-gray-800">
                            {{ $formation->titre }}
                        </div>

                        <div class="text-gray-500 text-xs">
                            {{ Str::limit($formation->description,60) }}
                        </div>

                    </td>

                    <td class="px-6 py-4">
                        {{ $formation->duree }} jours
                    </td>

                    <td class="px-6 py-4 font-semibold text-green-600">
                        {{ number_format($formation->prix,0,',',' ') }} FCFA
                    </td>

                    <td class="px-6 py-4">

                        @if($formation->phare)

                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                Formation Phare
                            </span>

                        @else

                            <span class="px-3 py-1 text-xs rounded-full bg-gray-100 text-gray-600">
                                Standard
                            </span>

                        @endif

                    </td>

                    <td class="px-6 py-4">

                        <div class="flex items-center justify-center gap-3">

                            <a href="{{ route('admin.formations.edit',$formation) }}"
                               class="px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white rounded-lg transition">

                                ✏️ Modifier

                            </a>

                            <form action="{{ route('admin.formations.destroy',$formation) }}"
                                  method="POST"
                                  onsubmit="return confirm('Voulez-vous vraiment supprimer cette formation ?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition">

                                    🗑️ Supprimer

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="6" class="text-center py-10 text-gray-500">

                        Aucune formation disponible.

                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</div>

<!-- Pagination -->
<div class="mt-6">
    {{ $formations->links() }}
</div>


</div>

@endsection
