@extends('admin.layouts.app')

@section('title', 'Détails du rendez-vous')

@section('content')

<div class="max-w-5xl mx-auto">

    <!-- En-tête -->

    <div class="flex items-center justify-between mb-8">

        <div>

            <h1 class="text-3xl font-bold text-gray-800">
                📅 Détails du rendez-vous
            </h1>

            <p class="text-gray-500 mt-1">
                Consultation complète de la demande.
            </p>

        </div>

        <a href="{{ route('admin.rendezvous.index') }}"
           class="bg-gray-200 hover:bg-gray-300 px-5 py-3 rounded-lg">

            ← Retour

        </a>

    </div>

    <!-- Carte principale -->

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header -->

        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">

            <div class="flex justify-between items-center">

                <div>

                    <h2 class="text-2xl font-bold text-white">
                        {{ $rendezVous->nom }}
                    </h2>

                    <p class="text-blue-100">
                        Demande enregistrée le
                        {{ optional($rendezVous->created_at)->format('d/m/Y à H:i') ?? 'Date non disponible' }}
                    </p>

                </div>

                <div>

                    @if($rendezVous->statut == 'en_attente')

                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-full font-semibold">
                            ⏳ En attente
                        </span>

                    @elseif($rendezVous->statut == 'confirme')

                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full font-semibold">
                            ✅ Confirmé
                        </span>

                    @else

                        <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full font-semibold">
                            ❌ Annulé
                        </span>

                    @endif

                </div>

            </div>

        </div>

        <!-- Informations -->

        <div class="p-8">

            <div class="grid md:grid-cols-2 gap-6">

                <div class="bg-gray-50 rounded-xl p-5">

                    <h3 class="font-semibold text-gray-700 mb-3">
                        👤 Informations client
                    </h3>

                    <div class="space-y-3">

                        <p>
                            <strong>Nom :</strong>
                            {{ $rendezVous->nom }}
                        </p>

                        <p>
                            <strong>Email :</strong>
                            {{ $rendezVous->email }}
                        </p>

                        <p>
                            <strong>Téléphone :</strong>
                            {{ $rendezVous->telephone }}
                        </p>

                    </div>

                </div>

                <div class="bg-gray-50 rounded-xl p-5">

                    <h3 class="font-semibold text-gray-700 mb-3">
                        📅 Rendez-vous
                    </h3>

                    <div class="space-y-3">

                        <p>
                            <strong>Service :</strong>
                            {{ $rendezVous->service }}
                        </p>

                        <p>
                            <strong>Date :</strong>
                            {{ \Carbon\Carbon::parse($rendezVous->date_rdv)->format('d/m/Y') }}
                        </p>

                        <p>
                            <strong>Heure :</strong>
                            {{ $rendezVous->heure_rdv }}
                        </p>

                    </div>

                </div>

            </div>

            <!-- Message -->

            <div class="mt-8">

                <h3 class="font-semibold text-gray-700 mb-3">
                    📝 Message du client
                </h3>

                <div class="bg-gray-50 border rounded-xl p-5 min-h-[150px]">

                    {{ $rendezVous->message ?? 'Aucun message fourni.' }}

                </div>

            </div>

            <!-- Actions -->

            <div class="mt-8 flex flex-wrap gap-4">

                @if($rendezVous->statut == 'en_attente')

                    <form method="POST"
                          action="{{ route('admin.rendezvous.confirmer', $rendezVous) }}">

                        @csrf
                        @method('PATCH')

                        <button
                            class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg shadow">

                            ✅ Confirmer le rendez-vous

                        </button>

                    </form>

                    <form method="POST"
                          action="{{ route('admin.rendezvous.annuler', $rendezVous) }}">

                        @csrf
                        @method('PATCH')

                        <button
                            class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg shadow">

                            ❌ Annuler le rendez-vous

                        </button>

                    </form>

                @endif

                <a href="{{ route('admin.rendezvous.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 px-6 py-3 rounded-lg">

                    ↩ Retour à la liste

                </a>

            </div>

        </div>

    </div>

</div>

@endsection