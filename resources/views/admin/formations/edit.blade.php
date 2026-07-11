@extends('admin.layouts.app')

@section('title', 'Modifier une formation')

@section('content')

<div class="max-w-5xl mx-auto">


<div class="bg-white rounded-2xl shadow-lg overflow-hidden">

    <!-- Header -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">

        <h1 class="text-3xl font-bold text-white">
            ✏️ Modifier une formation
        </h1>

        <p class="text-blue-100 mt-2">
            Mettez à jour les informations de la formation.
        </p>

    </div>

    <div class="p-8">

        <!-- Erreurs -->
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

        <form action="{{ route('admin.formations.update', $formation) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Titre -->
                <div>
                    <label class="block mb-2 font-medium text-gray-700">
                        Titre de la formation
                    </label>

                    <input type="text"
                           name="titre"
                           value="{{ old('titre', $formation->titre) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Catégorie -->
                <div>
                    <label class="block mb-2 font-medium text-gray-700">
                        Catégorie
                    </label>

                    {{-- <input type="text"
                           name="categorie"
                           value="{{ old('categorie', $formation->categorie) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"> --}}
                    <select
                        name="categorie_id"
                            class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Sélectionnez une catégorie</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}"
                                    {{ old('categorie_id', $formation->categorie_id) == $categorie->id ? 'selected' : '' }}>
                                {{ $categorie->nom }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Prix -->
                <div>
                    <label class="block mb-2 font-medium text-gray-700">
                        Prix (FCFA)
                    </label>

                    <input type="number"
                           name="prix"
                           value="{{ old('prix', $formation->prix) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Durée -->
                <div>
                    <label class="block mb-2 font-medium text-gray-700">
                        Durée (Heures)
                    </label>

                    <input type="number"
                           name="duree"
                           value="{{ old('duree', $formation->duree) }}"
                           class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>

            </div>

            <!-- Description -->
            <div class="mt-6">

                <label class="block mb-2 font-medium text-gray-700">
                    Description
                </label>

                <textarea name="description"
                          rows="6"
                          class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">{{ old('description', $formation->description) }}</textarea>

            </div>

            <!-- Programme détaillé -->
<!-- Programme détaillé -->
<div class="mt-6">

    <label class="block mb-2 font-medium text-gray-700">
        Programme détaillé
    </label>

    <textarea
        id="programme"
        name="programme"
        rows="12"
        class="w-full border border-gray-300 rounded-lg px-4 py-3">

        {!! old('programme', $formation->programme) !!}

    </textarea>

    <p class="text-sm text-gray-500 mt-2">
        Vous pouvez utiliser des titres, listes, couleurs et tableaux.
    </p>

</div>



            <!-- Image -->
            <div class="mt-6">

                <label class="block mb-3 font-medium text-gray-700">
                    Image de la formation
                </label>

                <input type="file"
                       name="image"
                       class="w-full border border-gray-300 rounded-lg px-4 py-3">

                @if($formation->image)

                    <div class="mt-4">

                        <p class="text-sm text-gray-500 mb-2">
                            Image actuelle
                        </p>

                        <img src="{{ asset('storage/'.$formation->image) }}"
                             class="w-48 rounded-xl shadow border">

                    </div>

                @endif

            </div>
            <!-- Brochure PDF -->

            <div class="mt-6">

               
                <label class="block mb-3 font-medium text-gray-700">
                    Brochure PDF
                </label>

                <input
                    type="file"
                    name="brochure"
                    accept=".pdf"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3">

                @if($formation->brochure)

                    <div class="mt-4 p-4 bg-gray-50 rounded-lg border">

                        <p class="font-medium text-gray-700 mb-2">
                            Brochure actuelle
                        </p>

                        <a href="{{ asset('storage/'.$formation->brochure) }}"
                        target="_blank"
                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">

                            📄 Voir la brochure

                        </a>

                    </div>

                @endif
               

            </div>


            <!-- Formation phare -->
            <div class="mt-6">

                <label class="inline-flex items-center">

                    <input type="checkbox"
                           name="phare"
                           class="w-5 h-5 text-blue-600 rounded"
                           {{ $formation->phare ? 'checked' : '' }}>

                    <span class="ml-3 text-gray-700">
                        ⭐ Formation phare
                    </span>

                </label>

            </div>

            <!-- Boutons -->
            <div class="flex items-center gap-4 mt-8">

                <button type="submit"
                        class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg shadow transition">

                    💾 Enregistrer

                </button>

                <a href="{{ route('admin.formations.index') }}"
                   class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg transition">

                    ↩ Retour

                </a>

            </div>

        </form>

    </div>

</div>


</div>

@endsection
@push('scripts')

 <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> 

<script>
document.addEventListener('DOMContentLoaded', function () {

    const programme = document.querySelector('#programme');

    if (programme) {

        ClassicEditor
            .create(programme)
            .catch(error => {
                console.error(error);
            });

    }

});

</script>

@endpush