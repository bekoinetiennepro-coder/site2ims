@extends('admin.layouts.app')

@section('content')

<div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow">

    <h1 class="text-2xl font-bold mb-6">
        Nouvel utilisateur
    </h1>

    <form method="POST"
          action="{{ route('admin.users.store') }}">

        @csrf

        <div class="mb-4">
            <label>Nom</label>
            <input type="text"
                   name="name"
                   class="w-full border rounded p-3">
        </div>

        <div class="mb-4">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="w-full border rounded p-3">
        </div>

        <div class="mb-4">
            <label>Mot de passe</label>
            <input type="password"
                   name="password"
                   class="w-full border rounded p-3">
        </div>

        <div class="mb-4">
            <label>Rôle</label>

            <select name="role"
                    class="w-full border rounded p-3">

                <option value="admin">
                    Administrateur
                </option>

                <option value="responsable">
                    Responsable Formation
                </option>

                <option value="commercial">
                    Commercial
                </option>

            </select>
        </div>

        <button
            class="bg-blue-600 text-white px-6 py-3 rounded">

            Créer l'utilisateur

        </button>

    </form>

</div>

@endsection