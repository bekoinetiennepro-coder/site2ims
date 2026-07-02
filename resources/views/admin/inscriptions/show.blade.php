@extends('admin.layouts.app')

@section('title','Détail de l\'inscription')

@section('content')

<div class="max-w-6xl mx-auto">

    <!-- Header -->

    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-t-2xl px-8 py-6 shadow">

        <div class="flex justify-between items-center">

            <div>

                <h1 class="text-3xl font-bold text-white">
                    📄 Détail de l'inscription
                </h1>

                <p class="text-blue-100 mt-2">
                    Consultation complète de la demande.
                </p>

            </div>

            @if($inscription->statut=="Validée")

                <span class="bg-green-500 text-white px-5 py-2 rounded-full font-semibold">

                    ✔ Validée

                </span>

            @elseif($inscription->statut=="Refusée")

                <span class="bg-red-500 text-white px-5 py-2 rounded-full font-semibold">

                    ✖ Refusée

                </span>

            @else

                <span class="bg-yellow-400 text-white px-5 py-2 rounded-full font-semibold">

                    ⏳ En attente

                </span>

            @endif

        </div>

    </div>

    <div class="bg-white shadow-lg rounded-b-2xl p-8">

        <!-- Formation -->

        <div class="mb-8">

            <h2 class="text-xl font-bold text-slate-700 border-b pb-3 mb-5">

                🎓 Formation

            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <p class="text-gray-500">
                        Formation
                    </p>

                    <p class="font-semibold text-lg">

                        {{ $inscription->formation->titre }}

                    </p>

                </div>

                <div>

                    <p class="text-gray-500">
                        Type d'inscription
                    </p>

                    <p class="font-semibold">

                        {{ $inscription->type }}

                    </p>

                </div>

            </div>

        </div>

        <!-- Informations -->

        <div class="mb-8">

            <h2 class="text-xl font-bold text-slate-700 border-b pb-3 mb-5">

                👤 Informations

            </h2>

            @if($inscription->type=="Particulier")

                <div class="grid md:grid-cols-2 gap-6">

                    <div>

                        <p class="text-gray-500">
                            Nom
                        </p>

                        <p class="font-semibold">

                            {{ $inscription->nom }}

                        </p>

                    </div>

                    <div>

                        <p class="text-gray-500">
                            Prénoms
                        </p>

                        <p class="font-semibold">

                            {{ $inscription->prenoms }}

                        </p>

                    </div>

                </div>

            @else

                <div class="grid md:grid-cols-2 gap-6">

                    <div>

                        <p class="text-gray-500">
                            Entreprise
                        </p>

                        <p class="font-semibold">

                            {{ $inscription->entreprise }}

                        </p>

                    </div>

                    <div>

                        <p class="text-gray-500">
                            Nombre de participants
                        </p>

                        <p class="font-semibold">

                            {{ $inscription->nombre_personnes }}

                        </p>

                    </div>

                </div>

            @endif

        </div>

        <!-- Coordonnées -->

        <div class="mb-8">

            <h2 class="text-xl font-bold text-slate-700 border-b pb-3 mb-5">

                📞 Coordonnées

            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <p class="text-gray-500">
                        Téléphone
                    </p>

                    <p class="font-semibold">

                        {{ $inscription->telephone }}

                    </p>

                </div>

                <div>

                    <p class="text-gray-500">
                        Email
                    </p>

                    <p class="font-semibold">

                        {{ $inscription->email }}

                    </p>

                </div>

            </div>

        </div>

        <!-- Informations supplémentaires -->

        <div class="mb-8">

            <h2 class="text-xl font-bold text-slate-700 border-b pb-3 mb-5">

                ℹ Informations supplémentaires

            </h2>

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <p class="text-gray-500">
                        Date d'inscription
                    </p>

                    <p class="font-semibold">

                        {{ $inscription->created_at->format('d/m/Y H:i') }}

                    </p>

                </div>

                <div>

                    <p class="text-gray-500">
                        Statut
                    </p>

                    <p class="font-semibold">

                        {{ $inscription->statut }}

                    </p>

                </div>

            </div>

        </div>

        @if($inscription->message)

        <div class="mb-8">

            <h2 class="text-xl font-bold text-slate-700 border-b pb-3 mb-5">

                💬 Message

            </h2>

            <div class="bg-gray-50 rounded-xl p-6">

                {{ $inscription->message }}

            </div>

        </div>

        @endif

        <!-- Actions -->

        <div class="flex flex-wrap gap-4">

            @if($inscription->statut=="En attente")

                <form method="POST"
                      action="{{ route('admin.inscriptions.valider',$inscription) }}">

                    @csrf
                    @method('PATCH')

                    <button class="px-6 py-3 bg-green-600 hover:bg-green-700 text-white rounded-xl">

                        ✔ Valider

                    </button>

                </form>

                <form method="POST"
                      action="{{ route('admin.inscriptions.refuser',$inscription) }}">

                    @csrf
                    @method('PATCH')

                    <button class="px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-xl">

                        ✖ Refuser

                    </button>

                </form>

            @endif

            <a href="{{ route('admin.inscriptions.index') }}"
               class="px-6 py-3 bg-slate-700 hover:bg-slate-800 text-white rounded-xl">

                ← Retour

            </a>

        </div>

    </div>

</div>

@endsection