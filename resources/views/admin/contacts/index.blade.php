@extends('admin.layouts.app')

@section('title','Messages de contact')

@section('content')

<div class="max-w-7xl mx-auto">

    <div class="flex justify-between items-center mb-8">

        <div>

            <h1 class="text-3xl font-bold text-slate-800">
                📩 Messages reçus
            </h1>

            <p class="text-gray-500 mt-2">
                Tous les messages envoyés depuis le formulaire de contact.
            </p>

        </div>

        <div class="bg-blue-600 text-white px-5 py-3 rounded-xl shadow">

            {{ $contacts->total() }} message(s)

        </div>

    </div>


    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">

        <table class="w-full">

            <thead class="bg-slate-900 text-white">

                <tr>

                    <th class="text-left px-6 py-4">Nom</th>

                    <th class="text-left px-6 py-4">Entreprise</th>

                    <th class="text-left px-6 py-4">Email</th>

                    <th class="text-left px-6 py-4">Téléphone</th>

                    <th class="text-left px-6 py-4">Statut</th>

                    <th class="text-left px-6 py-4">Date</th>

                    <th class="text-center px-6 py-4">Actions</th>

                </tr>

            </thead>

            <tbody>

            @forelse($contacts as $contact)

                <tr class="border-b hover:bg-gray-50">

                    <td class="px-6 py-4 font-semibold">

                        {{ $contact->nom }}

                    </td>

                    <td class="px-6 py-4">

                        {{ $contact->entreprise ?: '-' }}

                    </td>

                    <td class="px-6 py-4">

                        {{ $contact->email }}

                    </td>

                    <td class="px-6 py-4">

                        {{ $contact->telephone }}

                    </td>

                    <td class="px-6 py-4">

                        @if($contact->statut=='Lu')

                            <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-sm">

                                Lu

                            </span>

                        @else

                            <span class="px-3 py-1 rounded-full bg-red-100 text-red-700 text-sm">

                                Non lu

                            </span>

                        @endif

                    </td>

                    <td class="px-6 py-4">

                        {{ $contact->created_at->format('d/m/Y H:i') }}

                    </td>

                    <td class="px-6 py-4">

                        <div class="flex justify-center gap-3">

                            <a href="{{ route('admin.contacts.show',$contact) }}"
                               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">

                                Voir

                            </a>

                            <form action="{{ route('admin.contacts.destroy',$contact) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button
                                    onclick="return confirm('Supprimer ce message ?')"
                                    class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">

                                    Supprimer

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center py-16 text-gray-500">

                        Aucun message reçu.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-6">

        {{ $contacts->links() }}

    </div>

</div>

@endsection