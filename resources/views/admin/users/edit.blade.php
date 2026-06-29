@extends('admin.layouts.app')

@section('title', 'Modifier un utilisateur')

@section('content')

<div class="max-w-4xl mx-auto">

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">

            <h1 class="text-3xl font-bold text-white">
                ✏️ Modifier un utilisateur
            </h1>

            <p class="text-blue-100 mt-2">
                Mettez à jour les informations du collaborateur.
            </p>

        </div>

        <div class="p-8">

            @if ($errors->any())

                <div class="mb-6 bg-red-50 border border-red-200 rounded-lg p-4">

                    <h4 class="font-semibold text-red-700 mb-2">
                        Veuillez corriger les erreurs suivantes :
                    </h4>

                    <ul class="list-disc pl-5 text-red-600">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="{{ route('admin.users.update', $user) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <!-- Nom -->
                <div class="mb-6">

                    <label class="block mb-2 font-medium text-gray-700">
                        Nom complet
                    </label>

                    <input type="text"
                           name="name"
                           value="{{ old('name', $user->name) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500">

                </div>

                <!-- Email -->
                <div class="mb-6">

                    <label class="block mb-2 font-medium text-gray-700">
                        Adresse email
                    </label>

                    <input type="email"
                           name="email"
                           value="{{ old('email', $user->email) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500">

                </div>

                <!-- Nouveau mot de passe -->
                <div class="mb-6">

                    <label class="block mb-2 font-medium text-gray-700">
                        Nouveau mot de passe
                    </label>

                    <input type="password"
                           name="password"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500">

                    <p class="text-sm text-gray-500 mt-2">
                        Laissez vide pour conserver le mot de passe actuel.
                    </p>

                </div>

                <!-- Confirmation -->
                <div class="mb-6">

                    <label class="block mb-2 font-medium text-gray-700">
                        Confirmation du mot de passe
                    </label>

                    <input type="password"
                           name="password_confirmation"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500">

                </div>

                <!-- Rôle -->
                <div class="mb-6">

                    <label class="block mb-2 font-medium text-gray-700">
                        Rôle
                    </label>

                    <select name="role"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500">

                        <option value="admin"
                            {{ $user->role == 'admin' ? 'selected' : '' }}>
                            Administrateur
                        </option>

                        <option value="responsable"
                            {{ $user->role == 'responsable' ? 'selected' : '' }}>
                            Responsable Formation
                        </option>

                        <option value="commercial"
                            {{ $user->role == 'commercial' ? 'selected' : '' }}>
                            Commercial
                        </option>

                    </select>

                </div>

                <!-- Boutons -->
                <div class="flex items-center gap-4">

                    <button type="submit"
                            class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow">

                        💾 Enregistrer les modifications

                    </button>

                    <a href="{{ route('admin.users.index') }}"
                       class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg">

                        ↩ Retour

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection