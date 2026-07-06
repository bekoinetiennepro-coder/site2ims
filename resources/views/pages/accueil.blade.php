
@extends('layout.base')
@section('title', '2IMS | Solutions IT ; Infrastructure')
@section('content')
    


<main class="pt-20">
        <!-- Hero Section -->
    <section class="relative min-h-[85vh] flex items-center hero-pattern overflow-hidden">
        <div class="max-w-screen-2xl mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-xl items-center py-xl">
            <div class="z-10" data-aos="fade-up">
                <span class="inline-block px-4 py-1.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm mb-md">
                                EXPERT EN INFRASTRUCTURE IT
                </span>
                 <h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-md leading-tight">
                                Optimisez votre Infrastructure,<br/>
                    <span class="text-on-primary-container">Propulsez votre Vision</span>
                </h1>
                <p class="font-body-lg text-body-lg text-secondary mb-lg max-w-xl">
                    Expertise pointue en conseil, audit et solutions de pointe pour moderniser votre système d'information et sécuriser vos données critiques.
                </p>
                <div class="flex flex-wrap gap-md">
                    <a href="#services"
                        class="inline-flex items-center gap-2 bg-primary-container text-on-primary px-lg py-4 rounded-lg font-label-md text-label-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 active:scale-95">

                            Nos Services

                            <span class="material-symbols-outlined">
                                arrow_forward
                            </span>

                    </a>
                    <a href="{{ url('/propos#equipe') }}"
                    class="inline-flex items-center justify-center border border-outline text-primary px-lg py-4 rounded-lg font-label-md text-label-md hover:bg-surface-container-low hover:shadow-lg transition-all duration-300 active:scale-95">

                        Consulter un expert

                    </a>
                </div>
            </div>
            <div class="relative hidden md:block">
                 <div class="w-full aspect-square rounded-xl shadow-2xl relative z-10 overflow-hidden" data-alt="A professional high-tech server room background with glowing blue LED lights reflecting on polished surfaces. In the foreground, a sleek transparent glass interface displays complex network maps and data visualizations. The lighting is sophisticated and moody, emphasizing technical precision and corporate reliability with deep blues and crisp whites." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD-cDwYrAFv6BElix4CwKbgRn04rffF2OUjaDi4pSAFa57Ffe8nuo-NkE4b7ku5hyiBpkGXGYiJaxTHDDpkkFr-lMVXRDLFFoz5YC9XaYfdXl-KeIOPxIbh9zGHVvR86LCSQZJho9WcJqRx76JFwjcLZgGhje9xNeYjKpHdkLZAiz7UbHh1TERfaArcCcMU_yvhn09ZB5KEiKSkPARPurn4Shd8TmU7uPwm4cTR_6R00bV48xcJnZmRr0owmEsCuCUeRMoWEx_2ChU')">
            </div>
            <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-primary-fixed opacity-20 blur-3xl rounded-full"></div>
            <div class="absolute -top-10 -right-10 w-48 h-48 bg-secondary-fixed opacity-30 blur-2xl rounded-full"></div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="bg-primary py-lg">
        <div class="max-w-screen-2xl mx-auto px-margin-desktop grid grid-cols-2 md:grid-cols-4 gap-gutter text-center">
            <div class="flex flex-col items-center">
                <span class="font-display-lg text-display-lg text-on-primary mb-xs">150+</span>
                <span class="font-label-md text-label-md text-on-primary-fixed-variant uppercase tracking-widest">Projets Réalisés</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-display-lg text-display-lg text-on-primary mb-xs">12+</span>
                <span class="font-label-md text-label-md text-on-primary-fixed-variant uppercase tracking-widest">Ans d'Expertise</span>
            </div>
                <div class="flex flex-col items-center">
                <span class="font-display-lg text-display-lg text-on-primary mb-xs">50+</span>
                <span class="font-label-md text-label-md text-on-primary-fixed-variant uppercase tracking-widest">Partenaires Certifiés</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-display-lg text-display-lg text-on-primary mb-xs">24/7</span>
                <span class="font-label-md text-label-md text-on-primary-fixed-variant uppercase tracking-widest">Support Technique</span>
            </div>
        </div>
    </section>
    <!-- Services Grid Section -->
<section id="services" class="py-24 bg-slate-50">

    <div class="max-w-screen-2xl mx-auto px-6">

        <div class="text-center mb-16">

            <h2 class="text-4xl font-bold text-slate-800 mb-4">

                Solutions Digitales Intégrées

            </h2>

            <p class="text-lg text-gray-600 max-w-3xl mx-auto">

                Une approche holistique pour répondre aux défis technologiques les plus complexes de votre entreprise.

            </p>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($services as $service)

            <div
                class="bg-secondary-container rounded-2xl border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 overflow-hidden">

                <div class="p-8">

                    <div class="w-16 h-16 rounded-2xl bg-blue-100 flex items-center justify-center shadow mb-6">

                        <span class="material-symbols-outlined text-4xl text-blue-700">

                            {{ $service->icone }}

                        </span>

                    </div>

                    <h3 class="text-2xl font-bold text-slate-800 mb-4">

                        {{ $service->titre }}

                    </h3>

                    <p class="text-gray-600 leading-7">

                        {{ $service->description }}

                    </p>

                </div>

                <div
                    class="h-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-500">

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>
    <!-- CTA Section -->
    <section class="py-xl">
        <div class="max-w-screen-2xl mx-auto px-margin-desktop">
        <div class="relative rounded-2xl overflow-hidden bg-primary-container p-lg md:p-xl text-center">
        <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-0 right-0 w-96 h-96 bg-surface-variant rounded-full -mr-48 -mt-48 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-primary rounded-full -ml-32 -mb-32 blur-2xl"></div>
        </div>
        <div class="relative z-10">
        <h2 class="font-headline-md text-headline-md text-on-primary mb-md">Prêt à moderniser votre SI ?</h2>
        <p class="font-body-lg text-body-lg text-on-primary-container mb-lg max-w-2xl mx-auto">
                                    Discutez de votre projet avec nos experts et découvrez comment nous pouvons transformer vos défis techniques en opportunités de croissance.
                                </p>
        <a href="{{ route('rendezvous.create') }}"
            class="bg-surface text-primary px-xl py-4 rounded-lg font-label-md text-label-md hover:bg-primary-fixed transition-all active:scale-95 inline-flex items-center gap-base">

                Prendre rendez-vous

                <span class="material-symbols-outlined">
                    event
                </span>

        </a>
        
        </div>
        </div>
        </div>
    </section>
</main>

@endsection
<!-- Footer -->
