@extends('admin.layouts.app')

@section('title','Modifier un membre')

@section('content')

<div class="max-w-4xl mx-auto">

```
<div class="bg-white rounded-2xl shadow-lg overflow-hidden">

    <div class="bg-gradient-to-r from-amber-500 to-orange-600 px-8 py-6">

        <h1 class="text-3xl font-bold text-white">
            ✏️ Modifier un membre
        </h1>

    </div>

    <div class="p-8">

        <form action="{{ route('admin.equipes.update',$equipe) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <label class="block mb-2 font-medium">
                        Nom complet
                    </label>

                    <input type="text"
                           name="nom"
                           value="{{ old('nom',$equipe->nom) }}"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-medium">
                        Poste
                    </label>

                    <input type="text"
                           name="poste"
                           value="{{ old('poste',$equipe->poste) }}"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-medium">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           value="{{ old('email',$equipe->email) }}"
                           class="w-full border rounded-lg px-4 py-3">

                </div>

                <div>

                    <label class="block mb-2 font-medium">
                        LinkedIn
                    </label>

                    <input type="text"
                           name="linkedin"
                           value="{{ old('linkedin',$equipe->linkedin) }}"
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

                @if($equipe->photo)

                    <img src="{{ asset('storage/'.$equipe->photo) }}"
                         class="w-40 mt-4 rounded-xl border shadow">

                @endif

            </div>

            <div class="mt-6">

                <label class="inline-flex items-center">

                    <input type="checkbox"
                           name="actif"
                           {{ $equipe->actif ? 'checked' : '' }}>

                    <span class="ml-2">
                        Membre actif
                    </span>

                </label>

            </div>

            <div class="mt-8 flex gap-4">

                <button type="submit"
                        class="px-6 py-3 bg-amber-500 text-white rounded-lg hover:bg-amber-600">

                    💾 Mettre à jour

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
