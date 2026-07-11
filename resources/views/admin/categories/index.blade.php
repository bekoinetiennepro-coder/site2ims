@extends('admin.layouts.app')

@section('title','Catégories')

@section('content')

<div class="flex justify-between items-center mb-6">

    <h1 class="text-3xl font-bold">
        Catégories
    </h1>

    <a href="{{ route('admin.categories.create') }}"
       class="bg-blue-600 text-white px-5 py-3 rounded-lg">

        + Nouvelle catégorie

    </a>

</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

<table class="w-full">

<thead class="bg-slate-800 text-white">

<tr>

<th class="p-4 text-left">Nom</th>

<th class="p-4 text-center">Statut</th>

<th class="p-4 text-center">Actions</th>

</tr>

</thead>

<tbody>

@foreach($categories as $categorie)

<tr class="border-b">

<td class="p-4">

{{ $categorie->nom }}

</td>

<td class="p-4 text-center">

@if($categorie->actif)

<span class="text-green-600 font-semibold">

Actif

</span>

@else

<span class="text-red-600">

Inactif

</span>

@endif

</td>

<td class="p-4">

<div class="flex justify-center gap-2">

<a href="{{ route('admin.categories.edit',$categorie) }}"
class="bg-yellow-500 text-white px-3 py-2 rounded">

Modifier

</a>

<form method="POST"
action="{{ route('admin.categories.destroy',$categorie) }}">

@csrf

@method('DELETE')

<button
onclick="return confirm('Supprimer ?')"
class="bg-red-600 text-white px-3 py-2 rounded">

Supprimer

</button>

</form>

</div>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

<div class="mt-5">

{{ $categories->links() }}

</div>

@endsection