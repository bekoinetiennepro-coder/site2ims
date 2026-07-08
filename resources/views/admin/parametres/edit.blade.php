@extends('admin.layouts.app')

@section('title','Modifier les paramètres')

@section('content')

<div class="max-w-5xl mx-auto">

<div class="bg-white rounded-2xl shadow-xl overflow-hidden">

<div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">

<h1 class="text-3xl font-bold text-white">

⚙ Paramètres du contact

</h1>

</div>

<div class="p-8">

<form method="POST"
      action="{{ route('admin.parametres.update') }}">

@csrf
@method('PUT')

<div class="grid md:grid-cols-2 gap-6">

<div>

<label>Adresse</label>

<textarea
name="adresse"
rows="4"
class="w-full border rounded-lg px-4 py-3">{{ old('adresse',$parametre->adresse) }}</textarea>

</div>

<div>

<label>Horaires</label>

<textarea
name="horaire"
rows="4"
class="w-full border rounded-lg px-4 py-3">{{ old('horaire',$parametre->horaire) }}</textarea>

</div>

<div>

<label>Téléphone</label>

<input
type="text"
name="telephone"
value="{{ old('telephone',$parametre->telephone) }}"
class="w-full border rounded-lg px-4 py-3">

</div>

<div>

<label>WhatsApp</label>

<input
type="text"
name="whatsapp"
value="{{ old('whatsapp',$parametre->whatsapp) }}"
class="w-full border rounded-lg px-4 py-3">

</div>

<div>

<label>Email principal</label>

<input
type="email"
name="email"
value="{{ old('email',$parametre->email) }}"
class="w-full border rounded-lg px-4 py-3">

</div>

<div>

<label>Email support</label>

<input
type="email"
name="email_support"
value="{{ old('email_support',$parametre->email_support) }}"
class="w-full border rounded-lg px-4 py-3">

</div>

</div>

<div class="mt-6">

<label>Google Maps (iframe ou URL)</label>

<textarea
name="google_maps"
rows="5"
class="w-full border rounded-lg px-4 py-3">{{ old('google_maps',$parametre->google_maps) }}</textarea>

</div>

<div class="mt-8">

<button
class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-xl">

💾 Enregistrer

</button>

</div>

</form>

</div>

</div>

</div>

@endsection