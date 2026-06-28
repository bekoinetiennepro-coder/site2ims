<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>


<script src="https://cdn.tailwindcss.com">

</script>


</head>

<body class="bg-gray-100">

<div class="flex">


<aside class="w-64 min-h-screen bg-slate-900 text-white p-5">

    <h2 class="text-xl font-bold mb-6">
        2IMS Admin
    </h2>

    <ul class="space-y-3">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                📊 Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('admin.formations.index') }}">
                🎓 Formations
            </a>
        </li>

        <li>
            <a href="{{ route('admin.inscriptions.index') }}">
                📝 Inscriptions
            </a>
        </li>
    </ul>

</aside>

<main class="flex-1 p-8">
    @yield('content')
</main>


</div>
@stack('scripts')
</body>
</html>
