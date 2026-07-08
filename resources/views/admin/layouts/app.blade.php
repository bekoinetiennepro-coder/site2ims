<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>@yield('title')</title>


    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
          rel="stylesheet" />


</head>


<body class="bg-gray-100">


<div class="flex min-h-screen">



    <!-- SIDEBAR -->
    <aside class="w-72 bg-slate-950 text-white flex flex-col shadow-xl">



        <!-- Logo -->
        <div class="px-6 py-6 border-b border-white/10">


            <a href="{{ route('admin.dashboard') }}"
               class="flex items-center gap-3">


                <div class="bg-white rounded-xl p-2">

                    <img 
                        src="{{ asset('images/logo.jpg') }}"
                        class="h-10 w-auto"
                        alt="2IMS Logo">

                </div>



                <div>

                    <h1 class="text-xl font-bold">
                        2IMS
                    </h1>


                    <p class="text-xs text-slate-400">
                        Administration
                    </p>


                </div>


            </a>


        </div>





        <!-- Navigation -->
        <nav class="flex-1 px-4 py-6">


            <p class="text-xs uppercase text-slate-500 font-semibold mb-4 px-3">
                Menu principal
            </p>



            <ul class="space-y-2">



                <li>

                    <a href="{{ route('admin.dashboard') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl
                       hover:bg-blue-600 transition group">


                        <span class="material-symbols-outlined">
                            dashboard
                        </span>


                        <span>
                            Dashboard
                        </span>


                    </a>

                </li>





                <li>

                    <a href="{{ route('admin.formations.index') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl
                       hover:bg-blue-600 transition">


                        <span class="material-symbols-outlined">
                            school
                        </span>


                        Formations


                    </a>

                </li>





                <li>

                    <a href="{{ route('admin.inscriptions.index') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl
                       hover:bg-blue-600 transition">


                        <span class="material-symbols-outlined">
                            assignment
                        </span>


                        Inscriptions


                    </a>

                </li>





                <li>

                    <a href="{{ route('admin.users.index') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl
                       hover:bg-blue-600 transition">


                        <span class="material-symbols-outlined">
                            group
                        </span>


                        Utilisateurs


                    </a>

                </li>




                <li>

                    <a href="{{ route('admin.rendezvous.index') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl
                       hover:bg-blue-600 transition">


                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>


                        Rendez-vous


                    </a>

                </li>





                <li>

                    <a href="{{ route('admin.equipes.index') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl
                       hover:bg-blue-600 transition">


                        <span class="material-symbols-outlined">
                            groups
                        </span>


                        Equipe


                    </a>

                </li>





                <li>

                    <a href="{{ route('admin.services.index') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl
                       hover:bg-blue-600 transition">


                        <span class="material-symbols-outlined">
                            build
                        </span>


                        Services


                    </a>

                </li>





                <li>

                    <a href="{{ route('admin.references.index') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl
                       hover:bg-blue-600 transition">


                        <span class="material-symbols-outlined">
                            handshake
                        </span>


                        Partenaires


                    </a>

                </li>





                <li>

                    <a href="{{ route('admin.contacts.index') }}"
                       class="flex items-center gap-3 px-4 py-3 rounded-xl
                       hover:bg-blue-600 transition">


                        <span class="material-symbols-outlined">
                            mail
                        </span>


                        Contacts


                    </a>

                </li>



            </ul>






            <p class="text-xs uppercase text-slate-500 font-semibold 
                      mt-8 mb-4 px-3">

                Configuration

            </p>





            <a href="{{ route('admin.parametres.edit',1) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl
               hover:bg-blue-600 transition">


                <span class="material-symbols-outlined">
                    settings
                </span>


                Paramètres


            </a>




        </nav>






        <!-- Footer Sidebar -->
        <div class="p-4 border-t border-white/10">


            <form method="POST" action="{{ route('logout') }}">

                @csrf

                <button
                    class="w-full flex items-center gap-3 px-4 py-3
                    rounded-xl bg-red-500/10 text-red-400
                    hover:bg-red-500 hover:text-white transition">


                    <span class="material-symbols-outlined">
                        logout
                    </span>


                    Déconnexion


                </button>


            </form>



            <p class="text-xs text-slate-500 text-center mt-4">

                © {{ date('Y') }} 2IMS

            </p>


        </div>



    </aside>







    <!-- CONTENU -->
    <main class="flex-1 p-8">


        @yield('content')


    </main>




</div>


@stack('scripts')


</body>

</html>