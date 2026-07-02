@extends('admin.layouts.app')

@section('title','Nouvel utilisateur')

@section('content')

<div class="max-w-5xl mx-auto">

    <!-- En-tête -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl shadow-lg overflow-hidden mb-8">

        <div class="px-8 py-8">

            <h1 class="text-3xl font-bold text-white">
                👤 Ajouter un utilisateur
            </h1>

            <p class="text-blue-100 mt-2">
                Créez un nouveau compte pour accéder au back-office 2IMS.
            </p>

        </div>

    </div>

    <!-- Erreurs -->
    @if ($errors->any())

        <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-5">

            <h3 class="font-semibold text-red-700 mb-3">
                Veuillez corriger les erreurs suivantes :
            </h3>

            <ul class="list-disc pl-5 text-red-600 space-y-1">

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <!-- Formulaire -->

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <div class="p-8">

            <form method="POST"
                  action="{{ route('admin.users.store') }}">

                @csrf

                <div class="grid md:grid-cols-2 gap-6">

                    <!-- Nom -->

                    <div>

                        <label class="block text-gray-700 font-semibold mb-2">
                            Nom complet
                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

                    </div>

                    <!-- Email -->

                    <div>

                        <label class="block text-gray-700 font-semibold mb-2">
                            Adresse e-mail
                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

                    </div>

                    <!-- Mot de passe -->

                    <div>

                        <label class="block text-gray-700 font-semibold mb-2">
                            Mot de passe
                        </label>

                        <input
                            type="password"
                            name="password"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

                    </div>

                    <!-- Confirmation -->

                    <div>

                        <label class="block text-gray-700 font-semibold mb-2">
                            Confirmation du mot de passe
                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

                    </div>

                </div>

                <!-- Rôle -->

                <div class="mt-6">

                    <label class="block text-gray-700 font-semibold mb-2">
                        Rôle de l'utilisateur
                    </label>

                    <select
                        name="role"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

                        <option value="">
                            -- Sélectionner un rôle --
                        </option>

                        <option value="admin" {{ old('role')=='admin'?'selected':'' }}>
                            👑 Administrateur
                        </option>

                        <option value="responsable" {{ old('role')=='responsable'?'selected':'' }}>
                            🎓 Responsable Formation
                        </option>

                        <option value="commercial" {{ old('role')=='commercial'?'selected':'' }}>
                            💼 Commercial
                        </option>

                    </select>

                </div>

                <!-- Informations -->

                <div class="mt-8 rounded-xl bg-blue-50 border border-blue-200 p-5">

                    <h3 class="font-bold text-blue-700 mb-2">

                        ℹ Informations

                    </h3>

                    <ul class="space-y-2 text-blue-600">

                        <li>• L'utilisateur pourra se connecter au back-office.</li>

                        <li>• Les droits dépendront du rôle attribué.</li>

                        <li>• Le mot de passe pourra être modifié ultérieurement.</li>

                    </ul>

                </div>

                <!-- Boutons -->

                <div class="mt-8 flex items-center gap-4">

                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 px-8 py-3 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition">

                        💾 Créer l'utilisateur

                    </button>

                    <a href="{{ route('admin.users.index') }}"
                       class="inline-flex items-center gap-2 px-8 py-3 rounded-xl bg-gray-200 text-gray-700 font-semibold hover:bg-gray-300 transition">

                        ↩ Retour

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection