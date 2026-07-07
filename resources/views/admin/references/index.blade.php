@extends('admin.layouts.app')

@section('title','Gestion des références')

@section('content')

<div class="max-w-7xl mx-auto">

    <!-- Header -->

    <div class="flex justify-between items-center mb-8">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                🤝 Gestion des partenaires
            </h1>

            <p class="text-gray-500 mt-2">
                Gérez les partenaires affichés sur le site.
            </p>

        </div>

        <a href="{{ route('admin.references.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow-lg transition">

            ➕ Ajouter un partenaire

        </a>

    </div>

    <!-- Tableau -->

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

        <table class="w-full">

            <thead class="bg-slate-800 text-white">

                <tr>

                    <th class="p-4 text-left">Logo</th>
                    <th class="text-center">Actions</th>

                </tr>

            </thead>

            <tbody>

                @forelse($references as $reference)

                <tr class="border-t hover:bg-gray-50">

                    <td class="p-4">

                        <img
                            src="{{ asset('storage/'.$reference->logo) }}"
                            class="w-20 h-20 object-contain rounded-lg bg-white border p-2">

                    </td>

                    <td>

                        <div class="flex justify-center gap-3">

                            <a href="{{ route('admin.references.edit',$reference) }}"
                               class="px-4 py-2 rounded-lg bg-amber-500 hover:bg-amber-600 text-white">

                                Modifier

                            </a>

                            <form
                                action="{{ route('admin.references.destroy',$reference) }}"
                                method="POST">

                                @csrf
                                @method('DELETE')

                                <button
                                    onclick="return confirm('Supprimer ce partenaire ?')"
                                    class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white">

                                    Supprimer

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="6"
                        class="py-16 text-center text-gray-500">

                        Aucun partenaire enregistré.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    

</div>

@endsection