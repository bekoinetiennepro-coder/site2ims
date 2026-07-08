@extends('admin.layouts.app')

@section('title','Détail du message')

@section('content')

<div class="max-w-6xl mx-auto">

    <!-- En-tête -->
    <div class="flex justify-between items-center mb-8">

        <div>

            <h1 class="text-3xl font-bold text-slate-800">

                📩 Détail du message

            </h1>

            <p class="text-gray-500 mt-2">

                Message envoyé depuis le formulaire de contact.

            </p>

        </div>

        <a href="{{ route('admin.contacts.index') }}"
           class="px-6 py-3 bg-gray-200 rounded-xl hover:bg-gray-300 transition">

            ← Retour

        </a>

    </div>

    <div class="grid lg:grid-cols-3 gap-8">

        <!-- Informations -->
        <div class="lg:col-span-1">

            <div class="bg-white rounded-2xl shadow-xl p-8">

                <div class="flex justify-center mb-6">

                    <div class="w-24 h-24 rounded-full bg-blue-600 flex items-center justify-center text-white text-4xl font-bold">

                        {{ strtoupper(substr($contact->nom,0,1)) }}

                    </div>

                </div>

                <h2 class="text-2xl font-bold text-center">

                    {{ $contact->nom }}

                </h2>

                @if($contact->entreprise)

                    <p class="text-center text-gray-500 mt-2">

                        {{ $contact->entreprise }}

                    </p>

                @endif

                <hr class="my-6">

                <div class="space-y-5">

                    <div>

                        <span class="text-sm text-gray-500">

                            📧 Email

                        </span>

                        <p class="font-semibold">

                            {{ $contact->email }}

                        </p>

                    </div>

                    <div>

                        <span class="text-sm text-gray-500">

                            📞 Téléphone

                        </span>

                        <p class="font-semibold">

                            {{ $contact->telephone ?: '-' }}

                        </p>

                    </div>

                    <div>

                        <span class="text-sm text-gray-500">

                            🛠 Service

                        </span>

                        <p class="font-semibold">

                            {{ $contact->service ?: '-' }}

                        </p>

                    </div>

                    <div>

                        <span class="text-sm text-gray-500">

                            📅 Date

                        </span>

                        <p class="font-semibold">

                            {{ $contact->created_at->format('d/m/Y H:i') }}

                        </p>

                    </div>

                    <div>

                        <span class="text-sm text-gray-500">

                            Statut

                        </span>

                        <div class="mt-2">

                            @if($contact->statut=='Lu')

                                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full">

                                    ✅ Lu

                                </span>

                            @else

                                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full">

                                    📩 Non lu

                                </span>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Message -->
        <div class="lg:col-span-2">

            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">

                    <h2 class="text-2xl font-bold text-white">

                        💬 Message

                    </h2>

                </div>

                <div class="p-8">

                    <div class="bg-gray-50 rounded-xl p-6 leading-8 text-gray-700 whitespace-pre-line">

                        {{ $contact->message }}

                    </div>

                    <div class="mt-10 flex flex-wrap gap-4">

                        <a href="mailto:{{ $contact->email }}"
                           class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl shadow">

                            📧 Répondre

                        </a>

                        @if($contact->telephone)

                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->telephone) }}"
                               target="_blank"
                               class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-xl shadow">

                                💬 WhatsApp

                            </a>
                        @endif

                        <form action="{{ route('admin.contacts.destroy',$contact) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button
                                onclick="return confirm('Supprimer ce message ?')"
                                class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl shadow">

                                🗑 Supprimer

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection