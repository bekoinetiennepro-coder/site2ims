@extends('admin.layouts.app')

@section('title', 'Utilisateurs')

@section('content')

<div class="max-w-7xl mx-auto">

    <div class="flex justify-between items-center mb-8">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                👥 Gestion des utilisateurs
            </h1>

            <p class="text-gray-500 mt-2">
                Gérez les administrateurs et collaborateurs de la plateforme.
            </p>
        </div>

        <a href="{{ route('admin.users.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">

            ➕ Nouvel utilisateur

        </a>

    </div>

    @if(session('success'))

        <div class="mb-6 bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-lg">

            {{ session('success') }}

        </div>

    @endif

    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <table class="w-full">

            <thead class="bg-slate-800 text-white">

                <tr>

                    <th class="p-4">Nom</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Rôle</th>
                    <th class="p-4">Créé le</th>
                    <th class="p-4 text-center">Actions</th>

                </tr>

            </thead>

            <tbody>

                @forelse($users as $user)

                    <tr class="border-b hover:bg-gray-50">

                        <td class="p-4 font-medium">

                            {{ $user->name }}

                        </td>

                        <td class="p-4 text-gray-600">

                            {{ $user->email }}

                        </td>

                        <td class="p-4">

                            @if($user->role == 'admin')

                                <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm">
                                    Administrateur
                                </span>

                            @elseif($user->role == 'responsable')

                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">
                                    Responsable
                                </span>

                            @else

                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-sm">
                                    Commercial
                                </span>

                            @endif

                        </td>

                        <td class="p-4 text-gray-500">

                            {{ $user->created_at->format('d/m/Y') }}

                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-3">

                                <a href="{{ route('admin.users.edit',$user) }}"
                                   class="px-3 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">

                                    ✏️ Modifier

                                </a>

                                <form action="{{ route('admin.users.destroy',$user) }}"
                                      method="POST"
                                      onsubmit="return confirm('Supprimer cet utilisateur ?')">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="px-3 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">

                                        🗑️ Supprimer

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5"
                            class="text-center p-10 text-gray-500">

                            Aucun utilisateur enregistré.

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-6">

        {{ $users->links() }}

    </div>

</div>

@endsection