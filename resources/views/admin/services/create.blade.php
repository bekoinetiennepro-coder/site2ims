@extends('admin.layouts.app')

@section('title','Ajouter un service')

@section('content')

<div class="max-w-5xl mx-auto">

<div class="bg-white rounded-2xl shadow-xl overflow-hidden">

<div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">

<h1 class="text-3xl font-bold text-white">

🚀 Nouveau service

</h1>

</div>

<div class="p-8">

<form action="{{ route('admin.services.store') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

<div class="grid md:grid-cols-2 gap-6">

<div>

<label>Titre</label>

<input type="text"
name="titre"
class="w-full border rounded-lg px-4 py-3">

</div>

<div>

<label>Icône Material</label>

<input type="text"
name="icone"
placeholder="cloud_queue"
class="w-full border rounded-lg px-4 py-3">

<p class="text-xs text-gray-500 mt-2">

Exemple : cloud_queue, security, database...

</p>

</div>

<div>

<label>Ordre</label>

<input type="number"
name="ordre"
value="1"
class="w-full border rounded-lg px-4 py-3">

</div>

<div>

<label>Image</label>

<input type="file"
name="image"
class="w-full border rounded-lg px-4 py-3">

</div>

</div>

<div class="mt-6">

<label>Description</label>

<textarea
name="description"
rows="6"
class="w-full border rounded-lg px-4 py-3"></textarea>

</div>

<div class="mt-6">

<label class="inline-flex items-center">

<input type="checkbox"
name="actif"
checked>

<span class="ml-2">

Service actif

</span>

</label>

</div>

<div class="mt-8 flex gap-4">

<button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">

💾 Enregistrer

</button>

<a href="{{ route('admin.services.index') }}"
class="px-6 py-3 bg-gray-200 rounded-lg">

Retour

</a>

</div>

</form>

</div>

</div>

</div>

@endsection