@extends('layout.base')

@section('title','Contact | 2IMS')

@section('content')

<main class="flex-grow">

    <!-- HERO -->
    <section class="relative overflow-hidden bg-gradient-to-r from-primary via-slate-900 to-primary py-24">

        <div class="absolute inset-0 opacity-10">

            <div class="absolute -top-24 -left-24 w-96 h-96 bg-white rounded-full blur-3xl"></div>

            <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-400 rounded-full blur-3xl"></div>

        </div>

        <div class="relative max-w-7xl mx-auto px-6 text-center text-white">

            <span
                class="inline-flex items-center px-5 py-2 rounded-full bg-white/10 backdrop-blur">

                <span class="material-symbols-outlined mr-2">
                    support_agent
                </span>

                Nous sommes à votre écoute

            </span>

            <h1 class="mt-8 text-5xl md:text-6xl font-bold">

                Contactez nos experts

            </h1>

            <p class="mt-6 text-lg text-white/80 max-w-3xl mx-auto leading-8">

                Vous avez un projet informatique, une question ou souhaitez
                obtenir un devis ?

                Notre équipe vous répond sous 24 heures.

            </p>

        </div>

    </section>


    <!-- CONTACT FORM -->
    <section class="py-20 bg-slate-50">

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-12 gap-12">

            <!-- Informations -->

            <div class="lg:col-span-5 space-y-8">

                <div class="bg-white rounded-3xl shadow-xl p-8">

                    <h2 class="text-3xl font-bold text-primary mb-8">

                        Nos coordonnées

                    </h2>

                    <!-- Adresse -->

                    <div class="flex items-start gap-5 mb-8">

                        <div
                            class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center">

                            <span
                                class="material-symbols-outlined text-primary">

                                location_on

                            </span>

                        </div>

                        <div>

                            <h3 class="font-semibold text-lg">

                                Adresse

                            </h3>

                            <p class="text-gray-600 mt-2">

                                {!! nl2br(e($parametre->adresse)) !!}

                            </p>

                        </div>

                    </div>

                    <!-- Téléphone -->

                    <div class="flex items-start gap-5 mb-8">

                        <div
                            class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center">

                            <span
                                class="material-symbols-outlined text-green-700">

                                call

                            </span>

                        </div>

                        <div>

                            <h3 class="font-semibold text-lg">

                                Téléphone

                            </h3>

                            <a
                                href="tel:{{ $parametre->telephone }}"
                                class="text-gray-600 hover:text-primary">

                                {{ $parametre->telephone }}

                            </a>

                            <p class="text-sm text-gray-400 mt-1">

                                {{ $parametre->horaire }}

                            </p>

                        </div>

                    </div>

                    <!-- Email -->

                    <div class="flex items-start gap-5">

                        <div
                            class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center">

                            <span
                                class="material-symbols-outlined text-red-600">

                                mail

                            </span>

                        </div>

                        <div>

                            <h3 class="font-semibold text-lg">

                                Email

                            </h3>

                            <a
                                href="mailto:{{ $parametre->email }}"
                                class="text-gray-600 hover:text-primary">

                                {{ $parametre->email }}

                            </a>

                            @if($parametre->email_support)

                                <br>

                                <a
                                    href="mailto:{{ $parametre->email_support }}"
                                    class="text-gray-600 hover:text-primary">

                                    {{ $parametre->email_support }}

                                </a>

                            @endif

                        </div>

                    </div>

                </div>
                <div
                    class="rounded-3xl overflow-hidden shadow-xl border h-[400px]">

                    @if($parametre->google_maps)

                        <iframe

                            src="{{ $parametre->google_maps }}"

                            width="100%"

                            height="100%"

                            style="border:0;"

                            loading="lazy"

                            allowfullscreen>

                        </iframe>

                    @else

                        <div
                            class="flex items-center justify-center h-full text-gray-400">

                            Carte non configurée

                        </div>

                    @endif

                </div>

            </div>

        <!-- Le formulaire viendra ici (Partie 2) -->
        <div class="lg:col-span-7">
        <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-10">

        <h2 class="text-3xl font-bold text-primary mb-3">

            Envoyez-nous un message

        </h2>

        <p class="text-gray-500 mb-8">

            Remplissez le formulaire ci-dessous. Notre équipe vous répondra dans
            les meilleurs délais.

        </p>

        @if(session('success'))

            <div
                class="mb-8 rounded-xl border border-green-200 bg-green-50 p-4 text-green-700">

                {{ session('success') }}

            </div>

        @endif

        <form
            action="{{ route('contact.store') }}"
            method="POST"
            class="space-y-6">

            @csrf

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <label class="block font-semibold mb-2">

                        Nom complet *

                    </label>

                    <input
                        type="text"
                        name="nom"
                        value="{{ old('nom') }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">

                    @error('nom')

                        <p class="text-red-500 text-sm mt-2">

                            {{ $message }}

                        </p>

                    @enderror

                </div>

                <div>

                    <label class="block font-semibold mb-2">

                        Entreprise

                    </label>

                    <input
                        type="text"
                        name="entreprise"
                        value="{{ old('entreprise') }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">

                </div>

            </div>

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <label class="block font-semibold mb-2">

                        Email *

                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">

                    @error('email')

                        <p class="text-red-500 text-sm mt-2">

                            {{ $message }}

                        </p>

                    @enderror

                </div>

                <div>

                    <label class="block font-semibold mb-2">

                        Téléphone

                    </label>

                    <input
                        type="text"
                        name="telephone"
                        value="{{ old('telephone') }}"
                        class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">

                </div>

            </div>

            <div>

                <label class="block font-semibold mb-2">

                    Service souhaité

                </label>

                <select
                    name="service"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">

                    <option value="">

                        Sélectionnez un service

                    </option>

                    @foreach($services as $service)

                        <option
                            value="{{ $service->titre }}"
                            {{ old('service') == $service->titre ? 'selected' : '' }}>

                            {{ $service->titre }}

                        </option>

                    @endforeach

                </select>

            </div>

            <div>

                <label class="block font-semibold mb-2">

                    Votre message *

                </label>

                <textarea
                    name="message"
                    rows="7"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3 resize-none focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none">{{ old('message') }}</textarea>

                @error('message')

                    <p class="text-red-500 text-sm mt-2">

                        {{ $message }}

                    </p>

                @enderror

            </div>

            <div class="flex items-start gap-3">

                <input
                    type="checkbox"
                    required
                    class="mt-1 rounded">

                <p class="text-sm text-gray-500">

                    J'accepte que mes informations soient utilisées
                    uniquement pour répondre à ma demande conformément
                    à la politique de confidentialité.

                </p>

            </div>

            <button
                type="submit"
                class="w-full rounded-xl bg-primary hover:bg-primary/90 text-white font-semibold py-4 transition duration-300 shadow-lg hover:shadow-xl flex justify-center items-center gap-3">

                <span class="material-symbols-outlined">

                    send

                </span>

                Envoyer ma demande

            </button>

        </form>

    </div>
            </div>

        </div>

    </section>

<!-- CTA -->
<section class="relative overflow-hidden py-24 bg-gradient-to-r from-primary to-slate-900">

    <div class="absolute inset-0 opacity-10">

        <div class="absolute top-0 left-0 w-80 h-80 bg-white rounded-full blur-3xl"></div>

        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-400 rounded-full blur-3xl"></div>

    </div>

    <div class="relative max-w-7xl mx-auto px-6 text-center text-white">

        <span
            class="inline-flex items-center px-5 py-2 rounded-full bg-white/10 backdrop-blur mb-6">

            <span class="material-symbols-outlined mr-2">

                support_agent

            </span>

            Assistance disponible

        </span>

        <h2 class="text-4xl md:text-5xl font-bold mb-6">

            Un projet ? Discutons-en dès aujourd'hui.

        </h2>

        <p class="text-lg text-white/80 max-w-3xl mx-auto leading-8 mb-10">

            Nos consultants sont à votre disposition pour vous accompagner
            dans vos projets de transformation digitale, de développement
            logiciel, de cybersécurité, de Cloud Computing et de formation.

        </p>

        <div class="flex flex-wrap justify-center gap-5">

            <a href="tel:{{ $parametre->telephone }}"
               class="bg-white text-primary px-8 py-4 rounded-xl font-semibold shadow-lg hover:shadow-2xl hover:scale-105 transition duration-300 flex items-center gap-3">

                <span class="material-symbols-outlined">

                    call

                </span>

                Nous appeler

            </a>

            <a href="mailto:{{ $parametre->email }}"
               class="border border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-primary transition duration-300 flex items-center gap-3">

                <span class="material-symbols-outlined">

                    mail

                </span>

                Envoyer un e-mail

            </a>

        </div>

    </div>

</section>

</main>

@endsection
