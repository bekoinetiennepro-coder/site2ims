@extends('admin.layouts.app')

@section('title','Modifier un partenaire')

@section('content')

<div class="max-w-5xl mx-auto">

<div class="bg-white rounded-2xl shadow-xl overflow-hidden">

<div class="bg-gradient-to-r from-amber-500 to-orange-600 px-8 py-6">

<h1 class="text-3xl font-bold text-white">

✏ Modifier un partenaire

</h1>

</div>

<div class="p-8">

<form
action="{{ route('admin.references.update',$reference) }}"
method="POST"
enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="grid md:grid-cols-2 gap-6">



    <div>

        <label>Nouveau logo</label>

        <input
        type="file"
        name="logo"
        id="logo"
        class="w-full border rounded-lg px-4 py-3">

    </div>

</div>

<div class="mt-6">

<img
id="preview"
src="{{ asset('storage/'.$reference->logo) }}"
class="w-52 h-52 object-contain rounded-xl border shadow bg-white p-4">

</div>


<div class="mt-8 flex gap-4">

<button
class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-xl">

💾 Mettre à jour

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

}

}

</script>

@endpush