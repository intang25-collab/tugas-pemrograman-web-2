<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Penulis</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white min-h-screen">

    <header class="bg-pink-200 h-36 flex items-center justify-center">
        <h1 class="text-4xl font-bold text-white">
            Manajemen Data Penulis
        </h1>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-6">
        @yield('content')
    </main>

</body>
</html>