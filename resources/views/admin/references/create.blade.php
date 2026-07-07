@extends('admin.layouts.app')

@section('title','Ajouter une référence')

@section('content')

<div class="max-w-5xl mx-auto">

<div class="bg-white rounded-2xl shadow-xl overflow-hidden">

<div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">

<h1 class="text-3xl font-bold text-white">

🤝 Nouvelle référence

</h1>

</div>

<div class="p-8">

<form
action="{{ route('admin.references.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

<div class="grid md:grid-cols-2 gap-6">

    <div>

        <label>Logo</label>

        <input
        type="file"
        name="logo"
        id="logo"
        accept="image/*"
        class="w-full border rounded-lg px-4 py-3">

    </div>

</div>

<div class="mt-6">

<img id="preview"
class="hidden w-48 h-48 object-contain rounded-xl border shadow bg-white p-4">

</div>

<div class="mt-8 flex gap-4">

<button
class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-xl">

💾 Enregistrer

</button>

<a
href="{{ route('admin.references.index') }}"
class="px-6 py-3 bg-gray-200 rounded-xl">

Retour

</a>

</div>

</form>

</div>

</div>

</div>

@endsection

@push('scripts')

<script>

logo.onchange=e=>{

const file=e.target.files[0];

if(file){

preview.src=URL.createObjectURL(file);

preview.classList.remove('hidden');

}

}

</script>

@endpush