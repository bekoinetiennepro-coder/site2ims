@extends('layout.base')

@section('title', 'Contactez-nous | 2IMS - Expertise IT ; Solutions Digitales')

@section('content')

    <main class="flex-grow">
<!-- Hero Section -->
<section class="py-xl bg-surface-container-low border-b border-outline-variant/30">
<div class="max-w-screen-2xl mx-auto px-margin-mobile md:px-margin-desktop">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-md">Contactez-nous</h1>
<p class="font-body-lg text-body-lg text-secondary max-w-2xl">
                    Prêt à transformer votre infrastructure digitale ? Nos experts sont à votre écoute pour diagnostiquer vos besoins techniques et vous accompagner dans votre croissance.
                </p>
</div>
</section>
<!-- Main Content: Two Columns Layout -->
<section class="py-xl">
<div class="max-w-screen-2xl mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 lg:grid-cols-12 gap-gutter lg:gap-xl">
<!-- Column 1: Contact Info & Map -->
<div class="lg:col-span-5 space-y-lg">
<div class="bg-surface-container-lowest p-lg rounded-xl border border-surface-variant shadow-sm">
<h2 class="font-headline-sm text-headline-sm text-primary mb-lg">Informations de contact</h2>
<div class="space-y-md">
<div class="flex items-start gap-md">
<div class="w-10 h-10 bg-secondary-container rounded-lg flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary" data-icon="location_on">location_on</span>
</div>
<div>
<h3 class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-xs">Siège Social</h3>
<p class="font-body-md text-body-md text-on-surface-variant">
                                        Technopole de l'Innovation, Bâtiment B<br/>
                                        75008 Paris, France
                                    </p>
</div>
</div>
<div class="flex items-start gap-md">
<div class="w-10 h-10 bg-secondary-container rounded-lg flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary" data-icon="call">call</span>
</div>
<div>
<h3 class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-xs">Téléphone</h3>
<p class="font-body-md text-body-md text-on-surface-variant">+33 (0)1 45 67 89 00</p>
<p class="font-label-sm text-label-sm text-secondary italic">Lun - Ven, 9h00 - 18h30</p>
</div>
</div>
<div class="flex items-start gap-md">
<div class="w-10 h-10 bg-secondary-container rounded-lg flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-primary" data-icon="mail">mail</span>
</div>
<div>
<h3 class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-xs">Email</h3>
<p class="font-body-md text-body-md text-on-surface-variant">contact@2ims.fr</p>
<p class="font-body-md text-body-md text-on-surface-variant">support@2ims.fr</p>
</div>
</div>
</div>
</div>
<!-- Map Integration -->
<div class="rounded-xl overflow-hidden border border-surface-variant h-80 shadow-sm relative group">
<div class="absolute inset-0 bg-primary/5 group-hover:bg-transparent transition-colors duration-300 pointer-events-none z-10"></div>
<img class="w-full h-full object-cover grayscale-[0.5] contrast-[1.1]" data-alt="A clean, professional bird's eye view map of central Paris near the 8th arrondissement, styled with a minimalist corporate theme. The color palette is dominated by soft greys, whites, and deep blues consistent with the 2IMS brand. A single sophisticated blue marker points to a modern office location. The overall feel is architectural, precise, and tech-forward." data-location="Paris" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC94iUfHLi5frlLJZe9unAF4nxH3XPcFxWvuM9RzsvZahlqbYTcnwgW_ElGDSlOqZocsEGiUcEb5Vl8_62359GR31lnMOeY5hoszfAsFewo28IiBHmroeMQW7frZvyboeEyv9snjSl1NyISz2Asvj9qYTYffw-1t9D0MEiI8ny8UefZtSDa7OE_hQVGUxKtHx9hfd0aqfB_WAONSD5qaEhDlzipSrD0E-CFdoTeNELHXaA4c6xp5AlpU-rql1yT2OC9bQ2mhYgbc1g"/>
<div class="absolute bottom-md left-md bg-white/90 backdrop-blur-sm p-sm rounded-lg shadow-lg z-20">
<button class="flex items-center gap-xs font-label-md text-label-md text-primary">
<span class="material-symbols-outlined text-sm">directions</span>
                                Calculer l'itinéraire
                            </button>
</div>
</div>
</div>
<!-- Column 2: Professional Form -->
<div class="lg:col-span-7">
<div class="bg-white p-lg md:p-xl rounded-xl border border-surface-variant shadow-sm h-full">
<h2 class="font-headline-sm text-headline-sm text-primary mb-md">Envoyez un message</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-xl">
                            Remplissez le formulaire ci-dessous et l'un de nos consultants reviendra vers vous sous 24 heures ouvrées.
                        </p>
<form class="space-y-md" id="contactForm">
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="space-y-xs">
<label class="font-label-md text-label-md text-primary" for="name">Nom Complet *</label>
<input class="w-full px-md py-sm bg-surface-container-low border border-outline-variant rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-outline" id="name" placeholder="Jean Dupont" required="" type="text"/>
</div>
<div class="space-y-xs">
<label class="font-label-md text-label-md text-primary" for="company">Entreprise</label>
<input class="w-full px-md py-sm bg-surface-container-low border border-outline-variant rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-outline" id="company" placeholder="Ex: Tech Corp" type="text"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div class="space-y-xs">
<label class="font-label-md text-label-md text-primary" for="email">Email Professionnel *</label>
<input class="w-full px-md py-sm bg-surface-container-low border border-outline-variant rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-outline" id="email" placeholder="jean@entreprise.fr" required="" type="email"/>
</div>
<div class="space-y-xs">
<label class="font-label-md text-label-md text-primary" for="service">Service d'Intérêt</label>
<select class="w-full px-md py-sm bg-surface-container-low border border-outline-variant rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all text-on-surface-variant" id="service">
<option value="cloud">Cloud &amp; Infrastructure</option>
<option value="cyber">Cybersécurité</option>
<option value="dev">Développement Digital</option>
<option value="audit">Audit &amp; Conseil</option>
<option value="formation">Formation</option>
</select>
</div>
</div>
<div class="space-y-xs">
<label class="font-label-md text-label-md text-primary" for="message">Votre Message *</label>
<textarea class="w-full px-md py-sm bg-surface-container-low border border-outline-variant rounded-lg focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all placeholder:text-outline resize-none" id="message" placeholder="Comment pouvons-nous vous aider ?" required="" rows="5"></textarea>
</div>
<div class="flex items-center gap-sm">
<input class="rounded border-outline-variant text-primary focus:ring-primary" id="privacy" required="" type="checkbox"/>
<label class="font-label-sm text-label-sm text-secondary" for="privacy">
                                    J'accepte la politique de confidentialité et le traitement de mes données.
                                </label>
</div>
<button class="w-full bg-primary text-on-primary font-label-md text-label-md py-md rounded-lg flex items-center justify-center gap-sm hover:bg-primary-container transition-all active:scale-[0.98]" type="submit">
                                Envoyer ma demande
                                <span class="material-symbols-outlined text-[20px]" data-icon="send">send</span>
</button>
</form>
</div>
</div>
</div>
</section>
<!-- Newsletter / CTA -->
<section class="py-xl bg-primary text-on-primary">
<div class="max-w-screen-2xl mx-auto px-margin-mobile md:px-margin-desktop text-center">
<h2 class="font-headline-md text-headline-md mb-md">Besoin d'une assistance immédiate ?</h2>
<p class="font-body-lg text-body-lg mb-lg text-on-primary/80">Nos techniciens sont disponibles pour toute urgence IT 24h/24 pour nos clients sous contrat.</p>
<div class="flex flex-col sm:flex-row justify-center gap-md">
<button class="bg-on-primary text-primary font-label-md text-label-md px-xl py-md rounded-lg hover:bg-secondary-fixed transition-colors">
                        Accéder au Support
                    </button>
<button class="border border-on-primary/30 text-on-primary font-label-md text-label-md px-xl py-md rounded-lg hover:bg-on-primary/10 transition-colors">
                        Consulter la FAQ
                    </button>
</div>
</div>
</section>
</main>


@endsection