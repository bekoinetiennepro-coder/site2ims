@extends('layout.base')

@section('title', $formation->titre)

@section('content')

<!-- HERO -->

<section class="relative">

```
<div class="h-[450px] bg-cover bg-center"
     style="background-image:url('{{ asset('storage/'.$formation->image) }}')">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative z-10 max-w-screen-xl mx-auto px-6 h-full flex items-center">

        <div class="text-white max-w-3xl">

            <span class="inline-block px-4 py-2 bg-primary rounded-full mb-4">
                {{ $formation->categorie }}
            </span>

            <h1 class="text-5xl font-bold mb-4">
                {{ $formation->titre }}
            </h1>

            <div class="flex flex-wrap gap-6 text-lg">

                <span>
                    ⏱ {{ $formation->duree }} jours
                </span>

                <span>
                    💰 {{ number_format($formation->prix,0,',',' ') }} FCFA
                </span>

            </div>

        </div>

    </div>

</div>
```

</section>

<!-- CONTENU -->

<section class="max-w-screen-xl mx-auto px-6 py-16">

```
<div class="grid lg:grid-cols-3 gap-10">

    <!-- Partie gauche -->
    <div class="lg:col-span-2">

        <!-- Description -->
        <div class="bg-white rounded-2xl shadow-sm p-8 mb-8">

            <h2 class="text-3xl font-bold mb-6">
                Présentation de la formation
            </h2>

            <div class="text-gray-700 leading-relaxed">
                {!! nl2br(e($formation->description)) !!}
            </div>

        </div>

        <!-- Programme -->
        <div class="bg-white rounded-2xl shadow-sm p-8">

            <h2 class="text-3xl font-bold mb-6">
                Programme détaillé
            </h2>

            @if($formation->programme)

                <div class="text-gray-700 leading-relaxed">
                    {!! nl2br(e($formation->programme)) !!}
                </div>

            @else

                <p class="text-gray-500">
                    Programme disponible sur demande.
                </p>

            @endif

        </div>

    </div>

    <!-- Sidebar -->
    <div>

        <!-- Carte Infos -->
        <div class="bg-white rounded-2xl shadow-sm p-6 mb-6">

            <h3 class="text-xl font-bold mb-4">
                Informations
            </h3>

            <ul class="space-y-4">

                <li class="flex justify-between">
                    <span>Catégorie</span>
                    <strong>{{ $formation->categorie }}</strong>
                </li>

                <li class="flex justify-between">
                    <span>Durée</span>
                    <strong>{{ $formation->duree }} jours</strong>
                </li>

                <li class="flex justify-between">
                    <span>Prix</span>
                    <strong>
                        {{ number_format($formation->prix,0,',',' ') }} FCFA
                    </strong>
                </li>

            </ul>

            {{-- @if($formation->brochure)

                <a href="{{ asset('storage/'.$formation->brochure) }}"
                   download
                   class="mt-6 w-full inline-flex justify-center bg-green-600 text-white px-4 py-3 rounded-lg hover:bg-green-700">

                    📄 Télécharger la brochure

                </a>

            @endif --}}
            @if($formation->brochure)

                <a href="{{ asset('storage/'.$formation->brochure) }}"
                target="_blank"
                class="inline-flex items-center px-6 py-3 bg-red-600 text-white rounded-lg">

                    📄 Télécharger la brochure

                </a>

            @endif

        </div>

        <!-- Formulaire -->
        <div class="bg-white rounded-2xl shadow-sm p-6">

            <h3 class="text-2xl font-bold mb-6">
                Inscription
            </h3>

            <form method="POST" action="#">

                @csrf

                <div class="mb-4">

                    <label class="block mb-2">
                        Formation
                    </label>

                    <input type="text"
                           value="{{ $formation->titre }}"
                           readonly
                           class="w-full border rounded-lg px-4 py-3 bg-gray-100">

                </div>

                <div class="mb-4">

                    <label class="block mb-2">
                        Nom et Prénoms
                    </label>

                    <input type="text"
                           name="nom"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div class="mb-4">

                    <label class="block mb-2">
                        Téléphone
                    </label>

                    <input type="text"
                           name="telephone"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div class="mb-4">

                    <label class="block mb-2">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div class="mb-4">

                    <label class="block mb-2">
                        Entreprise
                    </label>

                    <input type="text"
                           name="entreprise"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div class="mb-6">

                    <label class="block mb-2">
                        Message
                    </label>

                    <textarea name="message"
                              rows="4"
                              class="w-full border rounded-lg px-4 py-3"></textarea>

                </div>

                <button type="submit"
                        class="w-full bg-primary text-white py-3 rounded-lg hover:opacity-90">

                    🚀 Je m'inscris

                </button>

            </form>

        </div>

    </div>

</div>
```

</section>

@endsection
