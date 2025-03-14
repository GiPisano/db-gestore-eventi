<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestore Eventi')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    @include('layouts.navbar')

    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</body>

</html>
