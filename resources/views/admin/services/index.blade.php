@extends('admin.layouts.app')

@section('title','Gestion des services')

@section('content')

<div class="max-w-7xl mx-auto">

    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                🚀 Gestion des services
            </h1>

            <p class="text-gray-500 mt-2">
                Gérez les services affichés sur la page d'accueil.
            </p>

        </div>

        <a href="{{ route('admin.services.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow-lg transition">

            ➕ Nouveau service

        </a>

    </div>

    @if(session('success'))

        <div class="mb-5 bg-green-100 text-green-700 p-4 rounded-xl">

            {{ session('success') }}

        </div>

    @endif

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

        <table class="w-full">

            <thead class="bg-slate-800 text-white">

                <tr>

                    <th class="p-4 text-left">Image</th>
                    <th class="text-left">Icône</th>
                    <th class="text-left">Titre</th>
                    <th class="text-left">Ordre</th>
                    <th class="text-left">Statut</th>
                    <th class="text-center">Actions</th>

                </tr>

            </thead>

            <tbody>

            @forelse($services as $service)

                <tr class="border-b hover:bg-gray-50">

                    <td class="p-4">

                        @if($service->image)

                            <img src="{{ asset('storage/'.$service->image) }}"
                                 class="w-20 h-16 rounded-lg object-cover">

                        @else

                            <span class="text-gray-400">Aucune</span>

                        @endif

                    </td>

                    <td>

                        <span class="material-symbols-outlined text-3xl text-blue-600">

                            {{ $service->icone }}

                        </span>

                    </td>

                    <td>

                        <strong>{{ $service->titre }}</strong>

                    </td>

                    <td>

                        {{ $service->ordre }}

                    </td>

                    <td>

                        @if($service->actif)

                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full">

                                Actif

                            </span>

                        @else

                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">

                                Inactif

                            </span>

                        @endif

                    </td>

                    <td>

                        <div class="flex justify-center gap-2">

                            <a href="{{ route('admin.services.edit',$service) }}"
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">

                                Modifier

                            </a>

                            <form action="{{ route('admin.services.destroy',$service) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button onclick="return confirm('Supprimer ce service ?')"
                                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">

                                    Supprimer

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6" class="text-center py-10 text-gray-500">

                        Aucun service enregistré

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-6">

        {{ $services->links() }}

    </div>

</div>

@endsection