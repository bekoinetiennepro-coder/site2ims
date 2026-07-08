@extends('admin.layouts.app')

@section('title','Paramètres du contact')

@section('content')

<div class="max-w-6xl mx-auto">

<div class="flex justify-between items-center mb-8">

    <div>

        <h1 class="text-3xl font-bold text-slate-800">

            📞 Paramètres du contact

        </h1>

        <p class="text-gray-500 mt-2">

            Informations affichées sur la page Contact.

        </p>

    </div>

    <a href="{{ route('admin.parametres.edit') }}"
       class="px-6 py-3 bg-blue-600 text-white rounded-xl hover:bg-blue-700">

        ✏ Modifier

    </a>

</div>

<div class="bg-white rounded-2xl shadow-xl overflow-hidden">

<table class="w-full">

<tr class="border-b">
    <th class="p-5 text-left w-64">Adresse</th>
    <td>{{ $parametre->adresse }}</td>
</tr>

<tr class="border-b">
    <th class="p-5 text-left">Téléphone</th>
    <td>{{ $parametre->telephone }}</td>
</tr>

<tr class="border-b">
    <th class="p-5 text-left">WhatsApp</th>
    <td>{{ $parametre->whatsapp }}</td>
</tr>

<tr class="border-b">
    <th class="p-5 text-left">Email</th>
    <td>{{ $parametre->email }}</td>
</tr>

<tr class="border-b">
    <th class="p-5 text-left">Support</th>
    <td>{{ $parametre->email_support }}</td>
</tr>

<tr class="border-b">
    <th class="p-5 text-left">Horaires</th>
    <td>{{ $parametre->horaire }}</td>
</tr>

<tr>
    <th class="p-5 text-left">Google Maps</th>
    <td class="break-all">{{ $parametre->google_maps }}</td>
</tr>

</table>

</div>

</div>

@endsection