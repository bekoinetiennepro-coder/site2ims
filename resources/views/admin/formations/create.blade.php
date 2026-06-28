@extends('admin.layouts.app')

@section('title','Ajouter une formation')

@section('content')

<h1 class="text-2xl font-bold mb-5">
    Nouvelle Formation
</h1>

<form action="{{ route('admin.formations.store') }}"
      method="POST"
      enctype="multipart/form-data">


@csrf

<div class="grid gap-4 bg-white p-6 rounded shadow">

    <input type="text"
           name="titre"
           placeholder="Titre"
           class="border p-3 rounded">

    <input type="text"
           name="categorie"
           placeholder="Catégorie"
           class="border p-3 rounded">

    <input type="number"
           name="duree"
           placeholder="Durée"
           class="border p-3 rounded">

    <input type="number"
           name="prix"
           placeholder="Prix"
           class="border p-3 rounded">

    <textarea name="description"
              rows="5"
              placeholder="Description"
              class="border p-3 rounded"></textarea>

    <div class="mt-6">

    <label class="block mb-2 font-medium text-gray-700">
        Programme détaillé
    </label>

    <textarea
        id="programme"
        name="programme"
        rows="12"
        class="w-full border border-gray-300 rounded-lg px-4 py-3">

       

    </textarea>

    <p class="text-sm text-gray-500 mt-2">
        Vous pouvez utiliser des titres, listes, couleurs et tableaux.
    </p>

</div>
    <div class="mt-6">
        <label class="block mb-2 font-medium">
            Brochure PDF
        </label>

        <input
            type="file"
            name="brochure"
            accept=".pdf"
            class="w-full border rounded-lg px-4 py-3">
    </div>

    <input type="file" name="image">

    <label>
        <input type="checkbox" name="phare">
        Formation phare
    </label>

    <button class="bg-green-600 text-white py-3 rounded">
        Enregistrer
    </button>

</div>


</form>

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