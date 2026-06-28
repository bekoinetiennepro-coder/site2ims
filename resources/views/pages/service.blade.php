@extends('layout.base')

@section('title', '2IMS - Nos Services ; Expertises IT')

@section('content')
    <main>
<!-- Hero Section -->
<section class="relative py-xl overflow-hidden">
<div class="max-w-screen-2xl mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-2 gap-gutter items-center">
<div class="z-10">
<span class="inline-block py-xs px-sm bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm rounded-full mb-md uppercase tracking-wider">Expertise Technologique</span>
<h1 class="font-display-lg text-display-lg text-primary mb-md leading-tight">Solutions Digitales &amp; Infrastructure IT</h1>
<p class="font-body-lg text-body-lg text-secondary mb-lg max-w-xl">
                        Nous accompagnons les entreprises dans leur transformation numérique à travers des services d'ingénierie logicielle de pointe et un conseil stratégique rigoureux.
                    </p>
<div class="flex gap-md">
<a class="bg-primary text-on-primary px-lg py-3 rounded-lg font-label-md hover:shadow-lg transition-all" href="#expertises">Découvrir nos services</a>
<a class="border border-outline text-primary px-lg py-3 rounded-lg font-label-md hover:bg-surface-container transition-all flex items-center gap-xs" href="#">
<span class="material-symbols-outlined">play_circle</span>
                            Notre vision
                        </a>
</div>
</div>
<div class="relative">
<div class="w-full aspect-square rounded-xl overflow-hidden shadow-2xl relative z-10 border border-surface-container-high">
<img class="w-full h-full object-cover" data-alt="A clean, professional workspace with multiple high-end monitors showing complex data dashboards and code editors. The lighting is bright and natural with a cool blue undertone reflecting the 2IMS primary color palette. The composition is structured and minimalist, emphasizing technical precision and corporate expertise in a modern office environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA9HVZTqdBAZ3Oh-fFVux--yeqTI-fUk5Y_14S0DsdwqnkcQ9youPraEE08IHetrmu-m-sz12Lh4dOjgxlaKvYqXPY9NPmdVUDlcn6bn1bYz6PP8OBFN6N5v8Y6LsPyIxQYh-Z5fHt4Nv-bkK9Su2vN49QcBViA3kHs_lpnpoaRZbK1Tt3-6UzIpsvaSAsfUoaSqWy3l08u1vVmBm_Yo8qhLI0NgbEoQ4-p9f_zQfbCI5MiRW0IxgrmO0ZrwogYJy_yHZjqalimHsE"/>
</div>
<div class="absolute -bottom-10 -left-10 w-64 h-64 bg-primary-fixed-dim rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
<div class="absolute -top-10 -right-10 w-64 h-64 bg-tertiary-fixed-dim rounded-full mix-blend-multiply filter blur-3xl opacity-30"></div>
</div>
</div>
</section>
<!-- Services Grid - Bento Style -->
<section class="py-xl bg-surface-container-lowest" id="expertises">
<div class="max-w-screen-2xl mx-auto px-margin-desktop">
<div class="text-center mb-xl">
<h2 class="font-headline-md text-headline-md text-primary mb-sm">Nos Domaines d'Intervention</h2>
<p class="font-body-md text-body-md text-secondary max-w-2xl mx-auto">Une approche holistique du cycle de vie technologique, de la conception stratégique à l'exploitation technique.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
<!-- Conseil & Audit -->
<div class="md:col-span-8 group service-card bg-white p-lg rounded-xl shadow-sm border border-surface-container hover:shadow-md transition-all duration-300">
<div class="flex flex-col md:flex-row gap-lg">
<div class="md:w-1/3">
<div class="w-16 h-16 bg-primary-container text-primary-fixed rounded-lg flex items-center justify-center mb-md service-icon transition-transform">
<span class="material-symbols-outlined text-4xl" data-icon="query_stats">query_stats</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-sm">Conseil &amp; Audit</h3>
<p class="font-body-md text-body-md text-secondary mb-md">Aligner vos technologies sur vos objectifs business par une analyse rigoureuse de vos systèmes existants.</p>
<div class="flex flex-wrap gap-xs">
<span class="px-2 py-1 bg-surface-container text-on-surface-variant font-label-sm text-label-sm rounded">IT Strategy</span>
<span class="px-2 py-1 bg-surface-container text-on-surface-variant font-label-sm text-label-sm rounded">Cybersecurity</span>
<span class="px-2 py-1 bg-surface-container text-on-surface-variant font-label-sm text-label-sm rounded">Governance</span>
</div>
</div>
<div class="md:w-2/3 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A detailed overhead shot of a corporate boardroom meeting where professionals are reviewing complex architectural diagrams and IT infrastructure flowcharts. The environment is high-tech with sleek glass surfaces and subtle ambient lighting in deep navy and silver tones, conveying a sense of strategic planning and technical audit." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUTq_V6mbypOIYizGDyLAraeinU2ibuB2_APaJRSt9nfId0w4lUtaoxXAdSViIPJsLqcIeeuur1292Pbv_BM6HkDYUKLduPzsoxkMAXinNUGDRWgnrguamR4a1tPHU7MW2XZjCjS7cHoh2haARhN4Q59ZF9bHEmw5r9w1pIlaIZqaehi15Q1DBstopZsqWHfp6DgN-3s_bItrSS1v3Q5WH6R4VLrVApAEh8zLkOGU6_l13yVlc8guVkFeg36KUkQ5YCi7qyXyLr_Y"/>
</div>
</div>
</div>
<!-- Logiciels & Web -->
<div class="md:col-span-4 group service-card bg-white p-lg rounded-xl shadow-sm border border-surface-container hover:shadow-md transition-all duration-300">
<div class="w-16 h-16 bg-secondary-container text-secondary rounded-lg flex items-center justify-center mb-md service-icon transition-transform">
<span class="material-symbols-outlined text-4xl" data-icon="terminal">terminal</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-sm">Logiciels &amp; Web</h3>
<p class="font-body-md text-body-md text-secondary mb-lg">Développement de plateformes SaaS et applications web scalables haute performance.</p>
<div class="flex flex-wrap gap-xs mb-md">
<span class="px-2 py-1 bg-primary text-on-primary font-label-sm text-label-sm rounded">React</span>
<span class="px-2 py-1 bg-primary text-on-primary font-label-sm text-label-sm rounded">Java</span>
<span class="px-2 py-1 bg-primary text-on-primary font-label-sm text-label-sm rounded">Node.js</span>
</div>
<a class="text-primary font-label-md flex items-center gap-xs hover:underline" href="#">
                            En savoir plus <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
<!-- Applications Mobiles -->
<div class="md:col-span-4 group service-card bg-white p-lg rounded-xl shadow-sm border border-surface-container hover:shadow-md transition-all duration-300">
<div class="w-16 h-16 bg-tertiary-fixed text-on-tertiary-fixed-variant rounded-lg flex items-center justify-center mb-md service-icon transition-transform">
<span class="material-symbols-outlined text-4xl" data-icon="smartphone">smartphone</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-sm">Applications Mobiles</h3>
<p class="font-body-md text-body-md text-secondary mb-lg">Expériences mobiles natives et cross-platform centrées sur l'utilisateur.</p>
<div class="flex flex-wrap gap-xs mb-md">
<span class="px-2 py-1 bg-surface-container text-on-surface-variant font-label-sm text-label-sm rounded">Flutter</span>
<span class="px-2 py-1 bg-surface-container text-on-surface-variant font-label-sm text-label-sm rounded">Swift</span>
<span class="px-2 py-1 bg-surface-container text-on-surface-variant font-label-sm text-label-sm rounded">Kotlin</span>
</div>
</div>
<!-- Gestion de Données -->
<div class="md:col-span-8 group service-card bg-white p-lg rounded-xl shadow-sm border border-surface-container hover:shadow-md transition-all duration-300">
<div class="flex flex-col md:flex-row-reverse gap-lg h-full">
<div class="md:w-1/2 flex flex-col justify-center">
<div class="w-16 h-16 bg-primary-fixed-dim text-on-primary-fixed rounded-lg flex items-center justify-center mb-md service-icon transition-transform">
<span class="material-symbols-outlined text-4xl" data-icon="database">database</span>
</div>
<h3 class="font-headline-sm text-headline-sm text-primary mb-sm">Gestion de Données</h3>
<p class="font-body-md text-body-md text-secondary mb-md">Exploiter la puissance de vos données avec des architectures Cloud robustes et analytiques.</p>
<div class="flex flex-wrap gap-xs">
<span class="px-2 py-1 bg-primary-container text-on-primary-container font-label-sm text-label-sm rounded">AWS</span>
<span class="px-2 py-1 bg-primary-container text-on-primary-container font-label-sm text-label-sm rounded">Big Data</span>
<span class="px-2 py-1 bg-primary-container text-on-primary-container font-label-sm text-label-sm rounded">PostgreSQL</span>
</div>
</div>
<div class="md:w-1/2 rounded-lg overflow-hidden">
<img class="w-full h-full object-cover" data-alt="A stylized 3D visualization of a server room with glowing blue fiber optic cables and floating data nodes. The aesthetic is clean and futuristic, representing cloud infrastructure and database management. The primary colors are deep navy and electric blue, maintaining a corporate yet innovative feel consistent with the 2IMS brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuByg9IkwhHp_XVj9fLTUaQezw-EdOpSJ7X5sWwwmy2OherHCzSSS_RhNw6PfNb7BFlsL3XczubZdZlhR_8TTL0wGBA0VN7QEZbEMuzFfA3Xl1i_MvXKtWdq4PytzrgLjEhKL4_SXIVfTYM8moaoCU6-MQhgpbBmpeVF0dgqyH6CiYg0XQ-R3wWPleWv9M7tssj_dIh0XHf4kyUMvCQJyzGjr_r4wLZvRShQ1xem55hwmAmJ3-EXdVAH7GiJjpkNyayLNKW-QDDOQIY"/>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Technical Excellence Section -->
<section class="py-xl bg-primary text-on-primary relative overflow-hidden">
<div class="max-w-screen-2xl mx-auto px-margin-desktop relative z-10">
<div class="grid grid-cols-1 md:grid-cols-2 gap-xl items-center">
<div>
<h2 class="font-headline-md text-headline-md mb-md">Pourquoi choisir l'expertise 2IMS ?</h2>
<ul class="space-y-lg">
<li class="flex gap-md">
<span class="material-symbols-outlined text-primary-fixed-dim text-3xl" data-icon="verified">verified</span>
<div>
<h4 class="font-headline-sm text-headline-sm mb-xs">Rigueur Technique</h4>
<p class="font-body-md text-on-primary/70">Des standards de codage élevés et des processus QA automatisés pour une fiabilité totale.</p>
</div>
</li>
<li class="flex gap-md">
<span class="material-symbols-outlined text-primary-fixed-dim text-3xl" data-icon="speed">speed</span>
<div>
<h4 class="font-headline-sm text-headline-sm mb-xs">Agilité Opérationnelle</h4>
<p class="font-body-md text-on-primary/70">Une méthodologie flexible permettant des itérations rapides et une mise sur le marché accélérée.</p>
</div>
</li>
<li class="flex gap-md">
<span class="material-symbols-outlined text-primary-fixed-dim text-3xl" data-icon="security">security</span>
<div>
<h4 class="font-headline-sm text-headline-sm mb-xs">Sécurité par Design</h4>
<p class="font-body-md text-on-primary/70">L'intégration des contraintes de sécurité dès la première ligne de code.</p>
</div>
</li>
</ul>
</div>
<div class="grid grid-cols-2 gap-md">
<div class="bg-primary-container p-lg rounded-xl border border-primary-fixed-dim/20 text-center">
<div class="text-display-lg text-primary-fixed-dim mb-xs">15+</div>
<div class="font-label-md text-label-md uppercase tracking-widest text-on-primary/50">Années d'expérience</div>
</div>
<div class="bg-primary-container p-lg rounded-xl border border-primary-fixed-dim/20 text-center mt-lg">
<div class="text-display-lg text-primary-fixed-dim mb-xs">200+</div>
<div class="font-label-md text-label-md uppercase tracking-widest text-on-primary/50">Projets Livrés</div>
</div>
<div class="bg-primary-container p-lg rounded-xl border border-primary-fixed-dim/20 text-center -mt-lg">
<div class="text-display-lg text-primary-fixed-dim mb-xs">98%</div>
<div class="font-label-md text-label-md uppercase tracking-widest text-on-primary/50">Satisfaction Client</div>
</div>
<div class="bg-primary-container p-lg rounded-xl border border-primary-fixed-dim/20 text-center">
<div class="text-display-lg text-primary-fixed-dim mb-xs">40+</div>
<div class="font-label-md text-label-md uppercase tracking-widest text-on-primary/50">Experts IT</div>
</div>
</div>
</div>
</div>
<!-- Decorative Background Element -->
<div class="absolute inset-0 opacity-10 pointer-events-none">
<div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-primary-fixed-dim via-transparent to-transparent"></div>
</div>
</section>
<!-- Final Conversion CTA -->
<section class="py-xl bg-background">
<div class="max-w-screen-xl mx-auto px-margin-desktop">
<div class="bg-surface-container rounded-3xl p-lg md:p-xl text-center relative overflow-hidden shadow-sm">
<div class="relative z-10">
<h2 class="font-display-lg text-display-lg text-primary mb-md">Prêt à transformer votre infrastructure ?</h2>
<p class="font-body-lg text-body-lg text-secondary mb-lg max-w-2xl mx-auto">
                            Nos consultants sont à votre disposition pour analyser vos besoins et vous proposer une solution sur mesure. Parlons de votre prochain projet.
                        </p>
<div class="flex flex-col sm:flex-row justify-center gap-md">
<button class="bg-primary text-on-primary px-xl py-4 rounded-lg font-label-md text-lg hover:scale-105 transition-transform">Demander un Devis Gratuit</button>
<button class="border-2 border-primary text-primary px-xl py-4 rounded-lg font-label-md text-lg hover:bg-primary hover:text-on-primary transition-colors">Contacter un Expert</button>
</div>
</div>
<!-- Micro-interactions visual -->
<div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-primary-fixed-dim to-primary"></div>
</div>
</div>
</section>
</main>
@endsection