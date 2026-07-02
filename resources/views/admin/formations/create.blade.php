@extends('admin.layouts.app')

@section('title','Ajouter une formation')

@section('content')

<div class="max-w-6xl mx-auto">

    <!-- Header -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-t-2xl px-8 py-6 shadow">

        <h1 class="text-3xl font-bold text-white">
            🎓 Ajouter une nouvelle formation
        </h1>

        <p class="text-blue-100 mt-2">
            Créez une nouvelle formation qui sera affichée sur votre site web.
        </p>

    </div>

    <div class="bg-white rounded-b-2xl shadow-lg p-8">

        {{-- Erreurs --}}
        @if ($errors->any())

            <div class="mb-6 rounded-xl bg-red-50 border border-red-200 p-5">

                <h3 class="text-red-700 font-semibold mb-2">
                    Veuillez corriger les erreurs suivantes :
                </h3>

                <ul class="list-disc pl-6 text-red-600">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('admin.formations.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="grid md:grid-cols-2 gap-6">

                <!-- Titre -->
                <div>

                    <label class="block mb-2 font-semibold text-gray-700">
                        Titre de la formation
                    </label>

                    <input type="text"
                           name="titre"
                           value="{{ old('titre') }}"
                           placeholder="Ex : Laravel de A à Z"
                           class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-4 py-3">

                </div>

                <!-- Catégorie -->
                <div>

                    <label class="block mb-2 font-semibold text-gray-700">
                        Catégorie
                    </label>

                    <input type="text"
                           name="categorie"
                           value="{{ old('categorie') }}"
                           placeholder="Développement Web"
                           class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-4 py-3">

                </div>

                <!-- Durée -->
                <div>

                    <label class="block mb-2 font-semibold text-gray-700">
                        Durée (jours)
                    </label>

                    <input type="number"
                           name="duree"
                           value="{{ old('duree') }}"
                           placeholder="5"
                           class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-4 py-3">

                </div>

                <!-- Prix -->
                <div>

                    <label class="block mb-2 font-semibold text-gray-700">
                        Prix (FCFA)
                    </label>

                    <input type="number"
                           name="prix"
                           value="{{ old('prix') }}"
                           placeholder="250000"
                           class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500 px-4 py-3">

                </div>

            </div>

            <!-- Description -->

            <div class="mt-7">

                <label class="block mb-2 font-semibold text-gray-700">
                    Description
                </label>

                <textarea
                    rows="6"
                    name="description"
                    class="w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    placeholder="Présentez cette formation...">{{ old('description') }}</textarea>

            </div>

            <!-- Programme -->

            <div class="mt-7">

                <label class="block mb-2 font-semibold text-gray-700">
                    Programme détaillé
                </label>

                <textarea
                    id="programme"
                    name="programme"
                    rows="12">

                    {{ old('programme') }}

                </textarea>

                <p class="text-sm text-gray-500 mt-2">
                    Utilisez l'éditeur pour mettre en forme votre programme (titres, couleurs, tableaux, listes, images...).
                </p>

            </div>

            <!-- Image -->

            <div class="mt-7">

                <label class="block mb-2 font-semibold text-gray-700">
                    Image de couverture
                </label>

                <input
                    type="file"
                    name="image"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3">

            </div>

            <!-- Brochure -->

            <div class="mt-7">

                <label class="block mb-2 font-semibold text-gray-700">
                    Brochure PDF
                </label>

                <input
                    type="file"
                    name="brochure"
                    accept=".pdf"
                    class="w-full rounded-xl border border-gray-300 px-4 py-3">

            </div>

            <!-- Formation phare -->

            <div class="mt-7">

                <label class="inline-flex items-center">

                    <input
                        type="checkbox"
                        name="phare"
                        class="rounded text-blue-600">

                    <span class="ml-3 font-medium text-gray-700">

                        ⭐ Afficher comme formation phare

                    </span>

                </label>

            </div>

            <!-- Boutons -->

            <div class="mt-10 flex gap-4">

                <button
                    class="px-7 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl shadow-lg transition">

                    💾 Enregistrer la formation

                </button>

                <a href="{{ route('admin.formations.index') }}"
                   class="px-7 py-3 bg-gray-200 hover:bg-gray-300 rounded-xl">

                    Retour

                </a>

            </div>

        </form>

    </div>

</div>

@endsection


@push('scripts')

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>

ClassicEditor
.create(document.querySelector('#programme'))
.catch(error => {
    console.error(error);
});

</script>

@endpush