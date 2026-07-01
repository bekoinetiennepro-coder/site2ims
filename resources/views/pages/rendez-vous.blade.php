@extends('layout.base')

@section('title','Prendre rendez-vous')

@section('content')

<section class="py-20 bg-gray-50">

<div class="max-w-5xl mx-auto px-6">

    <div class="text-center mb-12">

        <h1 class="text-5xl font-bold text-blue-700 mb-4">

            📅 Prendre rendez-vous

        </h1>

        <p class="text-gray-600 text-lg">

            Échangez avec nos experts afin d'étudier votre besoin.

        </p>

    </div>

    @if(session('success'))

        <div class="bg-green-100 border border-green-300 text-green-700 p-4 rounded-lg mb-8">

            {{ session('success') }}

        </div>

    @endif

    <div class="bg-white rounded-3xl shadow-xl p-10">

        <form action="{{ route('rendezvous.store') }}"
              method="POST">

            @csrf

            <div class="grid md:grid-cols-2 gap-6">

                <div>

                    <label class="font-semibold">
                        Nom complet
                    </label>

                    <input
                        type="text"
                        name="nom"
                        class="w-full mt-2 border rounded-lg p-3">

                </div>

                <div>

                    <label class="font-semibold">
                        Téléphone
                    </label>

                    <input
                        type="text"
                        name="telephone"
                        class="w-full mt-2 border rounded-lg p-3">

                </div>

                <div>

                    <label class="font-semibold">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        class="w-full mt-2 border rounded-lg p-3">

                </div>

                <div>

                    <label class="font-semibold">
                        Entreprise
                    </label>

                    <input
                        type="text"
                        name="entreprise"
                        class="w-full mt-2 border rounded-lg p-3">

                </div>

                <div>

                    <label class="font-semibold">
                        Service souhaité
                    </label>

                    <select
                        name="service"
                        class="w-full mt-2 border rounded-lg p-3">

                        <option value="">
                            Choisir
                        </option>

                        <option>
                            Formation
                        </option>

                        <option>
                            Audit
                        </option>

                        <option>
                            Cybersécurité
                        </option>

                        <option>
                            Conseil
                        </option>

                    </select>

                </div>

                <div>

                    <label class="font-semibold">
                        Date souhaitée
                    </label>

                    <input
                        type="date"
                        name="date_rdv"
                        class="w-full mt-2 border rounded-lg p-3">

                </div>

                <div>

                    <label class="font-semibold">
                        Heure souhaitée
                    </label>

                    <input
                        type="time"
                        name="heure_rdv"
                        class="w-full mt-2 border rounded-lg p-3">

                </div>

            </div>

            <div class="mt-6">

                <label class="font-semibold">

                    Décrivez votre besoin

                </label>

                <textarea
                    name="message"
                    rows="5"
                    class="w-full mt-2 border rounded-lg p-3"></textarea>

            </div>

            <div class="text-center mt-8">

                <button
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-xl">

                    Envoyer la demande

                </button>

            </div>

        </form>

    </div>

</div>

</section>

@endsection