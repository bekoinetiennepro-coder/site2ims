
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
        <button class="bg-primary-container text-on-primary px-lg py-4 rounded-lg font-label-md text-label-md flex items-center gap-2 hover:shadow-lg transition-all active:scale-95">
                                    Nos Services <span class="material-symbols-outlined">arrow_forward</span>
        </button>
        <button class="border border-outline text-primary px-lg py-4 rounded-lg font-label-md text-label-md hover:bg-surface-container-low transition-all">
                                    Consulter un expert
                                </button>
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
    <section class="py-xl bg-surface-container-lowest">
        <div class="max-w-screen-2xl mx-auto px-margin-desktop">
        <div class="mb-lg text-center">
        <h2 class="font-headline-md text-headline-md text-primary mb-sm">Solutions Digitales Intégrées</h2>
        <p class="font-body-md text-body-md text-secondary max-w-2xl mx-auto">
                                Une approche holistique pour répondre aux défis technologiques les plus complexes de votre entreprise.
                            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
        <!-- Service Card 1 -->
        <div class="group bg-surface-container p-lg rounded-xl hover:bg-primary-container transition-all duration-300 cursor-pointer">
        <div class="w-12 h-12 rounded-lg bg-primary-fixed-dim flex items-center justify-center mb-md group-hover:bg-on-primary-container transition-colors">
        <span class="material-symbols-outlined text-primary group-hover:text-surface">quick_reference_all</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-primary mb-base group-hover:text-on-primary">Conseil IT</h3>
        <p class="font-body-md text-body-md text-secondary group-hover:text-on-primary-container">Accompagnement stratégique pour aligner votre technologie sur vos objectifs business.</p>
        </div>
        <!-- Service Card 2 -->
        <div class="group bg-surface-container p-lg rounded-xl hover:bg-primary-container transition-all duration-300 cursor-pointer">
        <div class="w-12 h-12 rounded-lg bg-primary-fixed-dim flex items-center justify-center mb-md group-hover:bg-on-primary-container transition-colors">
        <span class="material-symbols-outlined text-primary group-hover:text-surface">security</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-primary mb-base group-hover:text-on-primary">Audit SI</h3>
        <p class="font-body-md text-body-md text-secondary group-hover:text-on-primary-container">Évaluation rigoureuse de la sécurité, de la performance et de la conformité de vos infrastructures.</p>
        </div>
        <!-- Service Card 3 -->
        <div class="group bg-surface-container p-lg rounded-xl hover:bg-primary-container transition-all duration-300 cursor-pointer">
        <div class="w-12 h-12 rounded-lg bg-primary-fixed-dim flex items-center justify-center mb-md group-hover:bg-on-primary-container transition-colors">
        <span class="material-symbols-outlined text-primary group-hover:text-surface">code</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-primary mb-base group-hover:text-on-primary">Développement</h3>
        <p class="font-body-md text-body-md text-secondary group-hover:text-on-primary-container">Création d'applications sur mesure robustes et évolutives pour vos besoins spécifiques.</p>
        </div>
        <!-- Service Card 4 -->
        <div class="group bg-surface-container p-lg rounded-xl hover:bg-primary-container transition-all duration-300 cursor-pointer">
        <div class="w-12 h-12 rounded-lg bg-primary-fixed-dim flex items-center justify-center mb-md group-hover:bg-on-primary-container transition-colors">
        <span class="material-symbols-outlined text-primary group-hover:text-surface">school</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-primary mb-base group-hover:text-on-primary">Formation</h3>
        <p class="font-body-md text-body-md text-secondary group-hover:text-on-primary-container">Montée en compétences de vos équipes sur les dernières technologies et méthodologies.</p>
        </div>
        <!-- Service Card 5 -->
        <div class="group bg-surface-container p-lg rounded-xl hover:bg-primary-container transition-all duration-300 cursor-pointer">
        <div class="w-12 h-12 rounded-lg bg-primary-fixed-dim flex items-center justify-center mb-md group-hover:bg-on-primary-container transition-colors">
        <span class="material-symbols-outlined text-primary group-hover:text-surface">database</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-primary mb-base group-hover:text-on-primary">Bases de données</h3>
        <p class="font-body-md text-body-md text-secondary group-hover:text-on-primary-container">Optimisation, maintenance et sécurisation de vos environnements de données critiques.</p>
        </div>
        <!-- Service Card 6 -->
        <div class="group bg-surface-container p-lg rounded-xl hover:bg-primary-container transition-all duration-300 cursor-pointer">
        <div class="w-12 h-12 rounded-lg bg-primary-fixed-dim flex items-center justify-center mb-md group-hover:bg-on-primary-container transition-colors">
        <span class="material-symbols-outlined text-primary group-hover:text-surface">cloud_queue</span>
        </div>
        <h3 class="font-headline-sm text-headline-sm text-primary mb-base group-hover:text-on-primary">Cloud Computing</h3>
        <p class="font-body-md text-body-md text-secondary group-hover:text-on-primary-container">Migration et gestion de vos services vers des infrastructures cloud agiles et sécurisées.</p>
        </div>
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
