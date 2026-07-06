@extends('admin.layouts.app')

@section('title','Modifier un service')

@section('content')

<div class="max-w-5xl mx-auto">

<div class="bg-white rounded-2xl shadow-xl overflow-hidden">

<div class="bg-gradient-to-r from-amber-500 to-orange-600 px-8 py-6">

<h1 class="text-3xl font-bold text-white">

✏ Modifier le service

</h1>

</div>

<div class="p-8">

<form action="{{ route('admin.services.update',$service) }}"
method="POST"
enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="grid md:grid-cols-2 gap-6">

<div>

<label>Titre</label>

<input type="text"
name="titre"
value="{{ old('titre',$service->titre) }}"
class="w-full border rounded-lg px-4 py-3">

</div>

<div>

<label>Icône</label>

<input type="text"
name="icone"
value="{{ old('icone',$service->icone) }}"
class="w-full border rounded-lg px-4 py-3">

</div>

<div>

<label>Ordre</label>

<input type="number"
name="ordre"
value="{{ old('ordre',$service->ordre) }}"
class="w-full border rounded-lg px-4 py-3">

</div>

<div>

<label>Image</label>

<input type="file"
name="image"
class="w-full border rounded-lg px-4 py-3">

@if($service->image)

<img src="{{ asset('storage/'.$service->image) }}"
class="w-40 mt-4 rounded-lg">

@endif

</div>

</div>

<div class="mt-6">

<label>Description</label>

<textarea
name="description"
rows="6"
class="w-full border rounded-lg px-4 py-3">{{ old('description',$service->description) }}</textarea>

</div>

<div class="mt-6">

<label class="inline-flex items-center">

<input type="checkbox"
name="actif"
{{ $service->actif ? 'checked' : '' }}>

<span class="ml-2">

Service actif

</span>

</label>

</div>

<div class="mt-8 flex gap-4">

<button class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-lg">

💾 Mettre à jour

</button>

<a href="{{ route('admin.services.index') }}"
class="bg-gray-200 px-6 py-3 rounded-lg">

Retour

</a>

</div>

</form>

</div>

</div>

</div>

@endsection