@extends('layout.base')

@section('title', 'À Propos | 2IMS - Expertise IT ; Solutions Digitales')

@section('content')
    <main class="pt-20">
        <!-- Hero Section -->
        <section class="relative h-[70vh] flex items-center overflow-hidden bg-primary-container">

            <div class="max-w-screen-2xl mx-auto px-margin-desktop relative z-10 w-full">
                    <div class="max-w-3xl">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-primary text-on-primary rounded-full mb-md animate-fade-in">
                            <span class="w-2 h-2 rounded-full bg-tertiary-fixed-dim"></span>
                            <span class="font-label-sm text-label-sm tracking-widest uppercase">Expertise IT &amp; Excellence</span>
                        </div>
                        <h1 class="font-display-lg text-display-lg text-white mb-md leading-tight md:text-display-lg-mobile lg:text-display-lg">
                                    Précision Technique,<br/>
                             <span class="text-primary-fixed-dim">Agilité Humaine</span>
                        </h1>
                        <p class="font-body-lg text-body-lg text-white max-w-xl opacity-90">
                             Depuis plus d'une décennie, 2IMS accompagne les entreprises dans leur transformation 
                             digitale en alliant rigueur technologique et compréhension fine des enjeux métiers.
                        </p>
                    </div>
            </div>
        </section>
        <!-- Mission & Vision - Bento Grid Style -->
        <section class="py-xl bg-surface">
            <div class="max-w-screen-2xl mx-auto px-margin-desktop">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter items-stretch">
                    <div class="md:col-span-7 scroll-reveal">
                        <div class="bg-white p-lg rounded-xl shadow-sm h-full flex flex-col justify-center border border-outline-variant/30">
                            <h2 class="font-headline-md text-headline-md text-primary mb-md">Notre Mission</h2>
                            <p class="font-body-lg text-body-lg text-black mb-lg">
                                Nous nous engageons à bâtir des infrastructures IT résilientes et évolutives. Notre mission est de simplifier la complexité technologique pour permettre à nos clients de se concentrer sur leur cœur de métier.
                            </p>
                            <div class="grid grid-cols-2 gap-md">
                               <div class="flex flex-col gap-xs">
                                 <span class="font-headline-sm text-headline-sm text-primary font-bold">120+</span>
                                 <span class="font-label-md text-label-md text-secondary">Projets livrés</span>
                                </div>
                                <div class="flex flex-col gap-xs">
                                    <span class="font-headline-sm text-headline-sm text-primary font-bold">98%</span>
                                    <span class="font-label-md text-label-md text-secondary">Client Satisfaction</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:col-span-5 scroll-reveal" style="transition-delay: 100ms;">
                        <div class="bg-primary-container p-lg rounded-xl shadow-lg h-full text-white flex flex-col justify-between">
                            <div>
                                <span class="material-symbols-outlined text-4xl mb-md text-primary-fixed-dim">visibility</span>
                                <h3 class="font-headline-sm text-headline-sm mb-md">Notre Vision</h3>
                                <p class="font-body-md text-body-md text-white/90">
                                    Devenir le partenaire privilégié de l'innovation durable, en anticipant les ruptures technologiques pour transformer les défis de demain en opportunités aujourd'hui.
                                </p>
                            </div>
                            <div class="mt-lg pt-lg border-t border-white/10">
                                <p class="font-label-sm text-label-sm italic text-primary-fixed-dim">"L'IT n'est plus un support, c'est le moteur de votre croissance."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Experts Team Section -->
        <section id="equipe" class="py-xl bg-background">

            <div class="max-w-screen-2xl mx-auto px-margin-desktop">

                <div class="flex flex-col md:flex-row justify-between items-end mb-lg gap-md">

                    <div>

                        <h2 class="font-headline-md text-headline-md text-primary">
                            Une Équipe d'Experts
                        </h2>

                        <p class="font-body-lg text-body-lg text-secondary max-w-xl">
                            La force de 2IMS réside dans la complémentarité de nos talents.
                        </p>

                    </div>

                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">

                    @foreach($equipes as $membre)

                        <div class="group">

                            <div class="relative overflow-hidden rounded-xl mb-md h-[350px]">

                                <img
                                    src="{{ asset('storage/'.$membre->photo) }}"
                                    alt="{{ $membre->nom }}"
                                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

                                <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-md">

                                    <div class="flex gap-sm text-white">

                                        @if($membre->linkedin)

                                            <a href="{{ $membre->linkedin }}"
                                            target="_blank">

                                                <span class="material-symbols-outlined">
                                                    link
                                                </span>

                                            </a>

                                        @endif

                                        @if($membre->email)

                                            <a href="mailto:{{ $membre->email }}">

                                                <span class="material-symbols-outlined">
                                                    mail
                                                </span>

                                            </a>

                                        @endif

                                    </div>

                                </div>

                            </div>

                            <h4 class="font-headline-sm text-headline-sm text-primary">
                                {{ $membre->nom }}
                            </h4>

                            <p class="font-label-md text-label-md text-secondary">
                                {{ $membre->poste }}
                            </p>

                        </div>

                    @endforeach

                </div>

            </div>

        </section>
        <!-- CTA Section -->
        <section class="py-xl">
            <div class="max-w-screen-2xl mx-auto px-margin-desktop">
                <div class="relative rounded-2xl bg-primary overflow-hidden p-lg md:p-xl text-center scroll-reveal">

                    <div class="relative z-10 flex flex-col items-center gap-md">
                            <h2 class="font-display-lg text-display-lg text-white max-w-2xl md:text-display-lg-mobile lg:text-display-lg">
                                Prêt à transformer votre SI ?
                            </h2>
                            <p class="font-body-lg text-body-lg text-white max-w-xl">
                                Nos experts sont à votre disposition pour une première analyse gratuite de votre infrastructure.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-md mt-md">

                                <a href="#equipe"
                                        class="px-xl py-md bg-white text-primary font-label-md text-label-md rounded-lg hover:bg-surface-variant transition-all cursor-pointer active:scale-95 shadow-lg">
                                                        Discuter avec un expert

                                </a>                           


                                <a href="{{ url('/#services') }}"
                                    class="inline-flex items-center gap-2 bg-primary-container text-on-primary px-lg py-4 rounded-lg font-label-md text-label-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 active:scale-95">
                                        Nos Services

                                    <span class="material-symbols-outlined">
                                        arrow_forward
                                    </span>

                                </a>                          
                            </div>
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection