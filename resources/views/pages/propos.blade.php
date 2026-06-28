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
<p class="font-body-lg text-body-lg text-on-primary-container max-w-xl opacity-90">
                        Depuis plus d'une décennie, 2IMS accompagne les entreprises dans leur transformation digitale en alliant rigueur technologique et compréhension fine des enjeux métiers.
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
<p class="font-body-lg text-body-lg text-secondary mb-lg">
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
<p class="font-body-md text-body-md text-on-primary-container">
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
<section class="py-xl bg-background">
<div class="max-w-screen-2xl mx-auto px-margin-desktop">
<div class="flex flex-col md:flex-row justify-between items-end mb-lg gap-md scroll-reveal">
<div>
<h2 class="font-headline-md text-headline-md text-primary">Une Équipe d'Experts</h2>
<p class="font-body-lg text-body-lg text-secondary max-w-xl">La force de 2IMS réside dans la complémentarité de nos talents, alliant expertise technique pointue et vision stratégique.</p>
</div>
<div class="flex gap-sm">
<button class="p-base border border-outline rounded-full hover:bg-surface transition-colors cursor-pointer active:scale-95">
<span class="material-symbols-outlined">arrow_back</span>
</button>
<button class="p-base bg-primary text-on-primary rounded-full hover:opacity-90 transition-colors cursor-pointer active:scale-95">
<span class="material-symbols-outlined">arrow_forward</span>
</button>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Team Member 1 -->
<div class="group scroll-reveal" style="transition-delay: 50ms;">
<div class="relative overflow-hidden rounded-xl mb-md h-[400px]">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Professional corporate headshot of a senior IT architect, mid-40s, confident smile, wearing a modern navy suit. Studio lighting, soft grey background, high-end commercial photography style. Deep primary blue and soft white tones reflecting a corporate technical precision aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvN2GY_i7YPaMZE2M4_V2G2bUciHRcJPWRfPe-JJslo6CyRoxxKIuNGKx87fsQNRtZ2XguqifhSUGI9zqnTEoo7k9UPhv732nZRp8XugbcKsl4NccqLZ7VM1x_ljxG6_9JMBliqF9dmgq_f5cHblCvmnmwBitBbtHXodrpGkVX-djOPehj0q9-poFE707ibBLXmCYYq7DMD3WVXAOnLSrhddTq6YLXnBr7q3ViW8BkhH42Hh5sWol_7-C-Z34-7ly7qwTduH15H-M"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-md">
<div class="flex gap-sm text-white">
<span class="material-symbols-outlined text-body-md cursor-pointer hover:text-primary-fixed-dim">link</span>
<span class="material-symbols-outlined text-body-md cursor-pointer hover:text-primary-fixed-dim">mail</span>
</div>
</div>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary">Jean Dupont</h4>
<p class="font-label-md text-label-md text-secondary">Chief Technology Officer</p>
</div>
<!-- Team Member 2 -->
<div class="group scroll-reveal" style="transition-delay: 150ms;">
<div class="relative overflow-hidden rounded-xl mb-md h-[400px]">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A portrait of a female cybersecurity expert, early 30s, professional attire, smart glasses, sophisticated office environment in background. Focused and intelligent expression. Clean lighting, modern minimalist aesthetic with hints of slate blue and clinical white colors. Corporate excellence portraiture." src="https://lh3.googleusercontent.com/aida-public/AB6AXuATZGZ3xRQgtGLnUc-gwrmUz0mh4bHbOi6SlUd8EF9cHUN_FCoZjCMaFvSfAqgD4JLMlj4s-yw2pamDZm98Hn-1IHKa07Fc6TVpBY0EMDrZbgKUw9oT_MLreAcgFaws3ClL4lpuV5ygQWWvDpwrxfpYCMBEOH8CbkQt2DVw7extp4dcKKx4ur6nPqeNnbyf9TdHANZHm5kRzG00NeTHApZrN178YjIDOSkURZK_rAt8r-V1NYlyiaV5F4doRk5kMofm6xoyqbWsipY"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-md">
<div class="flex gap-sm text-white">
<span class="material-symbols-outlined text-body-md cursor-pointer hover:text-primary-fixed-dim">link</span>
<span class="material-symbols-outlined text-body-md cursor-pointer hover:text-primary-fixed-dim">mail</span>
</div>
</div>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary">Marie Leroux</h4>
<p class="font-label-md text-label-md text-secondary">Directrice Cybersécurité</p>
</div>
<!-- Team Member 3 -->
<div class="group scroll-reveal" style="transition-delay: 250ms;">
<div class="relative overflow-hidden rounded-xl mb-md h-[400px]">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="A portrait of a male cloud infrastructure engineer, late 30s, casual professional style, warm and approachable expression. Modern bright workspace background. Cinematic lighting, soft depth of field, high resolution corporate photography focusing on themes of reliability and expertise. Palette of clean whites and dark navy." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD1AWVxr2FmYI4Ld0Lbj61XqkrWloMI_VELLivusKW9P6qCUvudy_FgcbSlWuI1udZrN02cnf1sqY6RxYh1ydbqStodl2MLVO8KwUahVeX1MYTGwKrnzW2JpljqlV9fO23L0KCMVcLYwNfsmVaZs2-WYZapsjfOfBNn_dYTLyMqJ2hIRfyQ7gwE98cuSeCikpCqS_MjvLCYrU9vainG3Oq58LUMX0Hu6WRrO5RjTSpMwQIaCBtVH8xK7yzCbuQxZJZvS_Ly22_ha8c"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-md">
<div class="flex gap-sm text-white">
<span class="material-symbols-outlined text-body-md cursor-pointer hover:text-primary-fixed-dim">link</span>
<span class="material-symbols-outlined text-body-md cursor-pointer hover:text-primary-fixed-dim">mail</span>
</div>
</div>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary">Thomas Bazin</h4>
<p class="font-label-md text-label-md text-secondary">Lead Cloud Solutions</p>
</div>
<!-- Team Member 4 -->
<div class="group scroll-reveal" style="transition-delay: 350ms;">
<div class="relative overflow-hidden rounded-xl mb-md h-[400px]">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Portrait of a female digital strategy consultant, mid-30s, poised and visionary look. Modern minimalist studio background. Professional corporate lighting with a focus on clarity and authority. Color palette features deep blacks and vibrant white contrasts. Sharp focus, high fashion business photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRU3K--ovMomlfpyvGXXC3nJ3JK1ps1yJ-w2mqemSBiKaUt5JWSyQYHVwMMh_yP1nOX6Me00mDf83E1TPWiyo7OYXAdVZYX5J6z0pDk5zyRR-LlYwM2ERZZo5TDEKt6r_6y_VsNrxOhpCam9qHh3J3noxLcUN4XO06iUv_gm0iXp8dBkboP35eaELZ8vC6TUxPTDRH1jsy1fXdEd6bs_MY2IBt6qeX5gGIQgYvtxI2IDhsdWIyMZyzYX-ixudIBiPBmtIVQjhkzeA"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-md">
<div class="flex gap-sm text-white">
<span class="material-symbols-outlined text-body-md cursor-pointer hover:text-primary-fixed-dim">link</span>
<span class="material-symbols-outlined text-body-md cursor-pointer hover:text-primary-fixed-dim">mail</span>
</div>
</div>
</div>
<h4 class="font-headline-sm text-headline-sm text-primary">Sarah Kamara</h4>
<p class="font-label-md text-label-md text-secondary">Consultante Stratégie Digitale</p>
</div>
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
<p class="font-body-lg text-body-lg text-on-primary-container max-w-xl">
                            Nos experts sont à votre disposition pour une première analyse gratuite de votre infrastructure.
                        </p>
<div class="flex flex-col sm:flex-row gap-md mt-md">
<button class="px-xl py-md bg-white text-primary font-label-md text-label-md rounded-lg hover:bg-surface-variant transition-all cursor-pointer active:scale-95 shadow-lg">
                                Discuter avec un expert
                            </button>
<button class="px-xl py-md border border-white/30 text-white font-label-md text-label-md rounded-lg hover:bg-white/10 transition-all cursor-pointer active:scale-95">
                                Nos services
                            </button>
</div>
</div>
</div>
</div>
</section>
</main>
@endsection