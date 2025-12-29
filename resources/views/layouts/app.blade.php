<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Add any stylesheets or links here -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">My Store</h1>
        </div>
    </header>

    <div class="container mx-auto mt-6">
        @yield('content')
    </div>

    <footer class="bg-gray-800 text-white p-4 mt-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 My Store. All rights reserved.</p>
        </div>
    </footer>

    <!-- Add any scripts here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
