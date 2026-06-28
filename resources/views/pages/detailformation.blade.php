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

            <form method="POST"action="{{ route('inscriptions.store') }}">

              @csrf

                <input type="hidden"
                    name="formation_id"
                 value="{{ $formation->id }}">

        

                <div class="mb-4">

                    <label class="block mb-2">
                        Formation
                    </label>

                    <input type="text"
                           value="{{ $formation->titre }}"
                           readonly
                           class="w-full border rounded-lg px-4 py-3 bg-gray-100">

                </div>

                <<div class="mb-4">

                    <label class="font-medium">
                        Type d'inscription
                    </label>

                    <select id="type"
                            name="type"
                            class="w-full border rounded-lg p-3">

                        <option value="Particulier">
                            Particulier
                        </option>

                        <option value="Entreprise">
                            Entreprise
                        </option>

                    </select>

                </div>

                <div id="particulier">

                    <input type="text"
                        name="nom"
                        placeholder="Nom"
                        class="w-full border rounded-lg p-3 mb-3">

                    <input type="text"
                        name="prenoms"
                        placeholder="Prénoms"
                        class="w-full border rounded-lg p-3 mb-3">

                    <input type="text"
                        name="fonction"
                        placeholder="Fonction"
                        class="w-full border rounded-lg p-3 mb-3">

                </div>

                <div id="entreprise" style="display:none">

                    <input type="text"
                        name="entreprise"
                        placeholder="Nom de l'entreprise"
                        class="w-full border rounded-lg p-3 mb-3">

                    <input type="text"
                        name="libelle"
                        placeholder="Nom du responsable"
                        class="w-full border rounded-lg p-3 mb-3">

                    <input type="number"
                        name="nb_personnes"
                        placeholder="Nombre de personnes à former"
                        class="w-full border rounded-lg p-3 mb-3">

                </div>

                <input type="text"
                    name="telephone"
                    placeholder="Téléphone"
                    class="w-full border rounded-lg p-3 mb-3">

                <input type="email"
                    name="email"
                    placeholder="Email"
                    class="w-full border rounded-lg p-3 mb-3">

                <textarea
                    name="message"
                    class="w-full border rounded-lg p-3 mb-3"
                    rows="4"
                    placeholder="Message"></textarea>

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg">
                    Envoyer
                </button>

            </form>

            <script>

                const type = document.getElementById('type');

                const particulier =
                    document.getElementById('particulier');

                const entreprise =
                    document.getElementById('entreprise');

                type.addEventListener('change', function(){

                    if(this.value === 'Entreprise')
                    {
                        particulier.style.display = 'none';
                        entreprise.style.display = 'block';
                    }
                    else
                    {
                        particulier.style.display = 'block';
                        entreprise.style.display = 'none';
                    }

                });

            </script>    


        </div>

    </div>

</div>


</section>

@endsection
