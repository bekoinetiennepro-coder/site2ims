@extends('layout.base')
@section('title', 'Formations | 2IMS - Expertise IT ; Solutions Digitales')
@section('content')
    

<main class="pt-32 pb-xl">
    <!-- Hero Section -->
    <section class="max-w-screen-2xl mx-auto px-margin-mobile md:px-margin-desktop mb-xl">
        <div class="max-w-3xl">
            <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-md">
                Propulsez votre expertise avec nos formations intensives.
            </h1>
            <p class="font-body-lg text-body-lg text-secondary max-w-2xl">
                Des programmes conçus par des experts pour des professionnels exigeants. Maîtrisez les technologies de demain et sécurisez vos infrastructures dès aujourd'hui.
            </p>
        </div>
    </section>
    <!-- Filters & Search -->
    <section class="max-w-screen-2xl mx-auto px-margin-mobile md:px-margin-desktop mb-lg">


        <form method="GET" action="{{ route('formations') }}">

            <div class="flex flex-col md:flex-row md:items-center justify-between gap-md border-b border-outline-variant pb-md">

                <div class="flex flex-wrap gap-sm">

    <a href="{{ route('formations') }}"
       class="px-6 py-2 rounded-full border transition
       {{ !request('categorie') ? 'bg-primary text-white border-primary' : 'border-outline hover:bg-gray-100' }}">

        Toutes

    </a>

    @foreach($categories as $categorie)

        <a href="{{ route('formations',[
                'categorie'=>$categorie->slug,
                'search'=>request('search')
            ]) }}"
           class="px-6 py-2 rounded-full border transition
           {{ request('categorie') == $categorie->slug
                ? 'bg-primary text-white border-primary'
                : 'border-outline hover:bg-gray-100' }}">

            {{ $categorie->nom }}

        </a>

    @endforeach

</div>

                <div class="relative w-full md:w-80">

                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">
                        search
                    </span>

                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Rechercher une formation..."
                        class="w-full pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:ring-primary focus:border-primary text-body-md">

                </div>

            </div>

        </form>


    </section>

    <!-- Course Catalog Grid -->
    <section class="max-w-screen-2xl mx-auto px-margin-mobile md:px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">

            @foreach($formations as $formation)

                <div class="bg-surface-container-lowest rounded-xl overflow-hidden card-shadow flex flex-col">

                    <div class="h-56 bg-cover bg-center relative"
                        style="background-image:url('{{ asset('storage/'.$formation->image) }}')">

                        @if($formation->phare)
                            <div class="absolute top-4 right-4 bg-primary text-on-primary px-3 py-1 rounded-md">
                                PHARES
                            </div>
                        @endif

                    </div>

                    <div class="p-md flex-grow flex flex-col">

                        <div class="flex items-center gap-2 mb-xs">

                            <span class="text-on-secondary-container bg-secondary-container px-2 py-1 rounded">
                                {{ $formation->categorie->nom }}
                            </span>

                            <span>
                                {{ $formation->duree }} heures
                            </span>

                        </div>

                        <h3 class="font-headline-sm ">
                            {{ $formation->titre }}
                        </h3>

                        <p class="flex-grow">
                            {{ $formation->description }}
                        </p>

                        <div class="flex justify-between items-center mt-auto">

                            <span class="font-bold">
                                {{ number_format($formation->prix,0,',',' ') }} FCFA
                            </span>

                            {{-- <a href="{{ route('admin.formations.show',$formation->slug) }}"
                            class="bg-primary text-white px-4 py-2 rounded">
                            En savoir plus
                            </a> --}}

                            <a href="{{ route('formations.details',$formation->slug) }}"
                                 class="bg-primary text-white px-4 py-2 rounded-lg hover:opacity-90 transition">
                                En savoir plus
                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>
    </section>
<!-- Custom Program Section (Asymmetric / Bento-style) -->
<section class="mt-xl max-w-screen-2xl mx-auto px-margin-mobile md:px-margin-desktop">
<div class="bg-primary rounded-2xl overflow-hidden relative min-h-[400px] flex flex-col md:flex-row items-stretch">
<!-- Background Decoration -->
<div class="absolute inset-0 opacity-10 pointer-events-none">

</div>
<div class="w-full md:w-1/2 p-lg md:p-xl flex flex-col justify-center relative z-10 text-on-primary">
<h2 class="font-display-lg-mobile md:font-headline-md text-display-lg-mobile md:text-headline-md mb-md">
                        Besoin d'un programme sur mesure?
                    </h2>
<p class="font-body-lg text-body-lg mb-lg text-on-primary/80">
                        Nous accompagnons vos équipes avec des formations personnalisées, adaptées à votre stack technique et à vos enjeux métiers spécifiques.
                    </p>
<div class="flex flex-wrap gap-md">
    <a href="{{ url('/propos#equipe') }}"
        class="bg-on-primary text-primary px-8 py-3 rounded-lg font-label-md font-bold hover:bg-primary-fixed transition-colors">
            Discuter avec un expert

    </a>   
<a href="{{ url('/propos#partenaires') }}" class="border border-on-primary/30 text-on-primary px-8 py-3 rounded-lg font-label-md hover:bg-on-primary/10 transition-colors">Voir nos partenaires</a>
</div>
</div>
<div class="w-full md:w-1/2 bg-surface-container-high/20 p-lg md:p-xl flex items-center justify-center relative z-10">
<div class="grid grid-cols-2 gap-md w-full">
<div class="bg-on-primary/5 p-md rounded-xl backdrop-blur-sm border border-on-primary/10">
<span class="material-symbols-outlined text-[32px] text-primary-fixed mb-sm">groups</span>
<h4 class="font-label-md text-on-primary mb-xs">Intra-entreprise</h4>
<p class="text-[12px] text-on-primary/60">Formez vos équipes directement dans vos locaux ou à distance.</p>
</div>
<div class="bg-on-primary/5 p-md rounded-xl backdrop-blur-sm border border-on-primary/10">
<span class="material-symbols-outlined text-[32px] text-primary-fixed mb-sm">settings_input_component</span>
<h4 class="font-label-md text-on-primary mb-xs">Contenu Flexible</h4>
<p class="text-[12px] text-on-primary/60">Modules à la carte selon vos besoins technologiques réels.</p>
</div>
<div class="bg-on-primary/5 p-md rounded-xl backdrop-blur-sm border border-on-primary/10">
<span class="material-symbols-outlined text-[32px] text-primary-fixed mb-sm">verified_user</span>
<h4 class="font-label-md text-on-primary mb-xs">Certification</h4>
<p class="text-[12px] text-on-primary/60">Préparation aux examens officiels et validation des acquis.</p>
</div>
<div class="bg-on-primary/5 p-md rounded-xl backdrop-blur-sm border border-on-primary/10">
<span class="material-symbols-outlined text-[32px] text-primary-fixed mb-sm">terminal</span>
<h4 class="font-label-md text-on-primary mb-xs">Labs Pratiques</h4>
<p class="text-[12px] text-on-primary/60">Environnements réels pour une mise en pratique immédiate.</p>
</div>
</div>
</div>
</div>
</section>
</main>
@endsection