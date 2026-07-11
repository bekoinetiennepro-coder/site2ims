<!DOCTYPE html>

<html class="light" lang="fr"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
{{-- <title>2IMS | Solutions IT &amp; Infrastructure</title> --}}
<title>@yield('title')</title>
<link rel="icon" type="image/jpg" href="{{ asset('images/logo.jpg') }}">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
   
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary-fixed-dim": "#b0c8eb",
                    "surface-dim": "#d7dadd",
                    "secondary-container": "#d1e4fb",
                    "primary": "#000f22",
                    "on-secondary": "#ffffff",
                    "background": "#f7fafd",
                    "on-error-container": "#93000a",
                    "secondary": "#4e6073",
                    "outline-variant": "#c4c6ce",
                    "on-surface": "#181c1e",
                    "surface-container-low": "#f1f4f7",
                    "secondary-fixed-dim": "#b6c8de",
                    "on-primary": "#ffffff",
                    "error": "#ba1a1a",
                    "surface-tint": "#49607e",
                    "error-container": "#ffdad6",
                    "secondary-fixed": "#d1e4fb",
                    "inverse-primary": "#b0c8eb",
                    "on-primary-fixed": "#001c37",
                    "surface-container": "#ebeef1",
                    "surface-container-high": "#e5e8eb",
                    "surface-bright": "#f7fafd",
                    "tertiary-container": "#150082",
                    "on-error": "#ffffff",
                    "on-secondary-container": "#546679",
                    "on-surface-variant": "#43474d",
                    "surface-container-lowest": "#ffffff",
                    "tertiary-fixed": "#e2dfff",
                    "on-secondary-fixed-variant": "#37485a",
                    "on-primary-container": "#768dad",
                    "on-tertiary-fixed-variant": "#321ed2",
                    "primary-fixed": "#d2e4ff",
                    "on-background": "#181c1e",
                    "inverse-surface": "#2d3133",
                    "on-tertiary-container": "#7f7bff",
                    "primary-container": "#0a2540",
                    "surface-variant": "#e0e3e6",
                    "on-tertiary-fixed": "#0f0069",
                    "inverse-on-surface": "#eef1f4",
                    "tertiary-fixed-dim": "#c3c0ff",
                    "on-secondary-fixed": "#091d2d",
                    "on-tertiary": "#ffffff",
                    "tertiary": "#060045",
                    "surface-container-highest": "#e0e3e6",
                    "on-primary-fixed-variant": "#314865",
                    "surface": "#f7fafd",
                    "outline": "#74777e"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "margin-mobile": "16px",
                    "xl": "80px",
                    "sm": "12px",
                    "md": "24px",
                    "margin-desktop": "64px",
                    "lg": "48px",
                    "base": "8px",
                    "xs": "4px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "display-lg-mobile": ["Inter"],
                    "display-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "headline-md": ["Inter"],
                    "label-sm": ["Inter"],
                    "headline-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "body-lg": ["Inter"]
            },
            "fontSize": {
                    "display-lg-mobile": ["36px", {"lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                    "headline-md": ["30px", {"lineHeight": "38px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-sm": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .glass-card { background: rgba(255, 255, 255, 0.7); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.2); }
        .hero-pattern { background-color: #f7fafd; background-image: radial-gradient(#0a2540 0.5px, transparent 0.5px); background-size: 24px 24px; }
        .shimmer { position: relative; overflow: hidden; }
        .shimmer::after { content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%; background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent); transform: rotate(45deg); animation: shimmer 3s infinite; }
        @keyframes shimmer { 0% { transform: translateX(-100%) rotate(45deg); } 100% { transform: translateX(100%) rotate(45deg); } }
         body { font-family: 'Inter', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .card-shadow {
            box-shadow: 0px 4px 12px rgba(10, 37, 64, 0.05);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }
        .card-shadow:hover {
            box-shadow: 0px 12px 24px rgba(10, 37, 64, 0.1);
            transform: translateY(-4px);
        }
        .filter-chip.active {
            background-color: #000f22;
            color: #ffffff;
        }
    </style>
</head>
{{-- <script>
document.querySelector('input[name="search"]').addEventListener('keyup', function() {
    this.form.submit();
});
</script> --}}


<body class="bg-background text-on-surface">
<!-- Navigation Shell -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100">

    <div class="max-w-screen-2xl mx-auto px-margin-desktop flex justify-between items-center h-20">

        <!-- Logo -->
        <a href="/" class="flex items-center">
            <img
                src="{{ asset('images/logo.jpg') }}"
                alt="2IMS"
                class="h-16 w-auto hover:scale-105 transition duration-300">
        </a>

        <!-- Menu -->
        <div class="hidden md:flex items-center gap-8">

            <a href="/"
                class="relative font-semibold uppercase tracking-wide transition duration-300
                {{ request()->is('/') ? 'text-blue-700' : 'text-gray-700 hover:text-blue-700' }}
                after:absolute after:left-0 after:-bottom-2 after:h-[3px] after:bg-blue-700 after:rounded-full
                after:transition-all after:duration-300
                {{ request()->is('/') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}">

                Accueil

            </a>

            <a href="/propos"
                class="relative font-semibold uppercase tracking-wide transition duration-300
                {{ request()->is('propos') ? 'text-blue-700' : 'text-gray-700 hover:text-blue-700' }}
                after:absolute after:left-0 after:-bottom-2 after:h-[3px] after:bg-blue-700 after:rounded-full
                after:transition-all after:duration-300
                {{ request()->is('propos') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}">

                À propos

            </a>

            <a href="/#services"
                class="relative font-semibold uppercase tracking-wide text-gray-700 hover:text-blue-700 transition duration-300
                after:absolute after:left-0 after:-bottom-2 after:h-[3px] after:bg-blue-700 after:rounded-full
                after:w-0 hover:after:w-full after:transition-all after:duration-300">

                Services

            </a>

            <a href="/formation"
                class="relative font-semibold uppercase tracking-wide transition duration-300
                {{ request()->is('formation*') ? 'text-blue-700' : 'text-gray-700 hover:text-blue-700' }}
                after:absolute after:left-0 after:-bottom-2 after:h-[3px] after:bg-blue-700 after:rounded-full
                after:transition-all after:duration-300
                {{ request()->is('formation*') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}">

                Formations

            </a>

            <a href="/contact"
                class="relative font-semibold uppercase tracking-wide transition duration-300
                {{ request()->is('contact') ? 'text-blue-700' : 'text-gray-700 hover:text-blue-700' }}
                after:absolute after:left-0 after:-bottom-2 after:h-[3px] after:bg-blue-700 after:rounded-full
                after:transition-all after:duration-300
                {{ request()->is('contact') ? 'after:w-full' : 'after:w-0 hover:after:w-full' }}">

                Contact

            </a>

        </div>

        <!-- Bouton -->
        <a href="{{ route('rendezvous.create') }}"
            class="hidden lg:inline-flex items-center gap-2 px-6 py-3 rounded-xl
            bg-gradient-to-r from-blue-700 to-indigo-700
            text-white font-semibold
            shadow-lg
            hover:shadow-2xl
            hover:-translate-y-1
            hover:scale-105
            transition-all duration-300">

            <span class="material-symbols-outlined">
                event
            </span>

            Prendre rendez-vous

        </a>

    </div>

</nav>



    @yield('content')
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    @stack('scripts')

    <footer class="w-full bg-primary text-on-primary">


    <!-- Footer Content -->
    <div class="py-xl px-margin-mobile md:px-margin-desktop 
                grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-xl">


        <!-- Logo + Présentation -->
        <div>


          


            <p class="font-body-md opacity-80 leading-relaxed">
                Votre partenaire de confiance pour vos projets informatiques,
                vos infrastructures digitales et vos solutions métiers.
            </p>


        </div>




        <!-- Expertise -->
        <div>


            <h4 class="font-label-md font-semibold mb-md uppercase tracking-wider">
                Expertise
            </h4>


            <ul class="space-y-sm">


                <li>
                    <a href="{{ url('/#services') }}"
                       class="opacity-80 hover:opacity-100 hover:underline transition">
                        Développement logiciel
                    </a>
                </li>


                <li>
                    <a href="{{ url('/#services') }}"
                       class="opacity-80 hover:opacity-100 hover:underline transition">
                        Cybersécurité
                    </a>
                </li>


                <li>
                    <a href="{{ url('/#services') }}"
                       class="opacity-80 hover:opacity-100 hover:underline transition">
                        Cloud & DevOps
                    </a>
                </li>


                <li>
                    <a href="{{ url('/#services') }}"
                       class="opacity-80 hover:opacity-100 hover:underline transition">
                        Audit & Conseil
                    </a>
                </li>


            </ul>


        </div>





        <!-- Navigation -->
        <div>


            <h4 class="font-label-md font-semibold mb-md uppercase tracking-wider">
                Navigation
            </h4>


            <ul class="space-y-sm">


                <li>
                    <a href="{{ url('/') }}"
                       class="opacity-80 hover:opacity-100 hover:underline transition">
                        Accueil
                    </a>
                </li>



                <li>
                    <a href="{{ url('/propos') }}"
                       class="opacity-80 hover:opacity-100 hover:underline transition">
                        À propos
                    </a>
                </li>



                <li>
                    <a href="{{ url('/#services') }}"
                       class="opacity-80 hover:opacity-100 hover:underline transition">
                        Services
                    </a>
                </li>



                <li>
                    <a href="{{ url('/contact') }}"
                       class="opacity-80 hover:opacity-100 hover:underline transition">
                        Contact
                    </a>
                </li>


            </ul>


        </div>





        <!-- Contact / Newsletter -->
        <div>


            <h4 class="font-label-md font-semibold mb-md uppercase tracking-wider">
                Contact
            </h4>


            <ul class="space-y-sm opacity-80">


                <li class="flex items-center gap-sm">

                    <span class="material-symbols-outlined text-sm">
                        call
                    </span>

                    +225 07 07 96 38 39

                </li>



                <li class="flex items-center gap-sm">

                    <span class="material-symbols-outlined text-sm">
                        mail
                    </span>

                    contact@2ims.ci

                </li>



                <li class="flex items-start gap-sm">

                    <span class="material-symbols-outlined text-sm">
                        location_on
                    </span>

                    Abidjan, Côte d'Ivoire

                </li>


            </ul>



            <a href="{{ url('/contact') }}"
               class="inline-flex mt-lg bg-white text-primary 
                      px-lg py-sm rounded-lg
                      hover:bg-secondary transition">

                Nous contacter

            </a>


        </div>



    </div>





    <!-- Bottom Footer -->
    <div class="border-t border-white/10 
                py-md px-margin-mobile md:px-margin-desktop
                flex flex-col md:flex-row 
                justify-between items-center gap-md">


        <p class="text-sm opacity-60">

            © {{ date('Y') }} 2IMS.
            Tous droits réservés.

        </p>



        <div class="flex gap-md text-sm opacity-70">


            <a href="#"
               class="hover:underline">
                Politique de confidentialité
            </a>


            <a href="#"
               class="hover:underline">
                Mentions légales
            </a>


        </div>


    </div>


</footer>

    
    <script>
        // Micro-interaction for cards
        document.querySelectorAll('.group').forEach(card => {
            card.addEventListener('mouseenter', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });
            card.addEventListener('mouseleave', () => {
                const icon = card.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0deg)';
                }
            });
        });

        // Simple scroll spy or header effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 20) {
                nav.classList.add('shadow-md');
                nav.classList.remove('shadow-sm');
            } else {
                nav.classList.add('shadow-sm');
                nav.classList.remove('shadow-md');
            }
        });

        // Simple filter interaction logic
        const filters = document.querySelectorAll('.filter-chip');
        filters.forEach(filter => {
            filter.addEventListener('click', () => {
                filters.forEach(f => f.classList.remove('active'));
                filter.classList.add('active');
            });
        });
    </script>
</body>
</html>