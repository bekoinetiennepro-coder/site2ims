@extends('admin.layouts.app')

@section('title','Nouvelle catégorie')

@section('content')

<div class="max-w-xl mx-auto bg-white p-8 rounded-xl shadow">

<h1 class="text-2xl font-bold mb-6">

Nouvelle catégorie

</h1>

<form method="POST"
action="{{ route('admin.categories.store') }}">

@csrf

<label class="block mb-2">

Nom

</label>

<input
type="text"
name="nom"
class="w-full border rounded-lg px-4 py-3">

<div class="mt-5">

<label class="inline-flex items-center">

<input
type="checkbox"
name="actif"
checked>

<span class="ml-2">

Active

</span>

</label>

</div>

<div class="mt-8">

<button class="bg-blue-600 text-white px-6 py-3 rounded-lg">

Enregistrer

</button>

</div>

</form>

</div>

@endsection