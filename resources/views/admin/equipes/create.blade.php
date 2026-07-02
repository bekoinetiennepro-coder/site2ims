@extends('admin.layouts.app')

@section('title','Ajouter un membre')

@section('content')

<div class="max-w-4xl mx-auto">


<div class="bg-white rounded-2xl shadow-lg overflow-hidden">

    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">

        <h1 class="text-3xl font-bold text-white">
            👤 Ajouter un membre
        </h1>

    </div>

    <div class="p-8">

        <form action="{{ route('admin.equipes.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <label class="block mb-2 font-medium">
                        Nom complet
                    </label>

                    <input type="text"
                           name="nom"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-medium">
                        Poste
                    </label>

                    <input type="text"
                           name="poste"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-medium">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-medium">
                        LinkedIn
                    </label>

                    <input type="text"
                           name="linkedin"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-medium">
                        Ordre d'affichage
                    </label>

                    <input type="number"
                           value="1"
                           name="ordre"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

            </div>

           

            <div class="mt-6">

                <label class="block mb-2 font-medium">
                    Photo
                </label>

                <input type="file"
                       name="photo"
                       class="w-full border rounded-lg px-4 py-3">

            </div>

            <div class="mt-6">

                <label class="inline-flex items-center">

                    <input type="checkbox"
                           checked
                           name="actif">

                    <span class="ml-2">
                        Membre actif
                    </span>

                </label>

            </div>

            <div class="mt-8 flex gap-4">

                <button type="submit"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">

                    💾 Enregistrer

                </button>

                <a href="{{ route('admin.equipes.index') }}"
                   class="px-6 py-3 bg-gray-200 rounded-lg">

                    Retour

                </a>

            </div>

        </form>

    </div>

</div>
```

</div>

@endsection
