@extends('admin.layouts.app')

@section('title','Modifier catégorie')

@section('content')

<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow">

<h1 class="text-2xl font-bold mb-6">

Modifier la catégorie

</h1>

<form method="POST"
action="{{ route('admin.categories.update',$categorie) }}">

@csrf

@method('PUT')

<label class="block mb-2">

Nom

</label>

<input
type="text"
name="nom"
value="{{ $categorie->nom }}"
class="w-full border rounded-lg px-4 py-3">

<div class="mt-5">

<label class="inline-flex items-center">

<input
type="checkbox"
name="actif"
{{ $categorie->actif ? 'checked' : '' }}>

<span class="ml-2">

Active

</span>

</label>

</div>

<div class="mt-8">

<button class="bg-green-600 text-white px-6 py-3 rounded-lg">

Mettre à jour

</button>

</div>

</form>

</div>

@endsection