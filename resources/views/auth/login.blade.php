<x-guest-layout>

<div class="text-center mb-8">

    <img
        src="{{ asset('images/logo.jpg') }}"
        alt="2IMS"
        class="mx-auto h-24 mb-4">

    <h1 class="text-3xl font-bold text-blue-700">
        Administration 2IMS
    </h1>

    <p class="text-gray-500 mt-2">
        Connectez-vous pour accéder à votre espace d'administration
    </p>

</div>

<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">

    @csrf

    <!-- Email -->
    <div class="mb-5">

        <label
            for="email"
            class="block text-sm font-semibold text-gray-700 mb-2">

            Adresse e-mail

        </label>

        <input
            id="email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            required
            autofocus
            autocomplete="username"
            placeholder="Saisissez votre adresse e-mail"
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">

        <x-input-error
            :messages="$errors->get('email')"
            class="mt-2" />

    </div>

    <!-- Mot de passe -->
    <div class="mb-5">

        <label
            for="password"
            class="block text-sm font-semibold text-gray-700 mb-2">

            Mot de passe

        </label>

        <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            placeholder="Saisissez votre mot de passe"
            class="w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">

        <x-input-error
            :messages="$errors->get('password')"
            class="mt-2" />

    </div>

    <!-- Se souvenir -->
    <div class="flex items-center mb-6">

        <input
            id="remember_me"
            type="checkbox"
            name="remember"
            class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">

        <label
            for="remember_me"
            class="ml-2 text-sm text-gray-600">

            Se souvenir de moi

        </label>

    </div>

    <!-- Bouton -->
    <button
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl shadow-lg transition duration-300">

        🔐 Se connecter

    </button>

</form>

<div class="mt-8 text-center text-xs text-gray-400">

    © {{ date('Y') }} 2IMS - Tous droits réservés

</div>

</x-guest-layout>