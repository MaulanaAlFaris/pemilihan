<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Super Admin')</title>
    <!-- Tambahkan link CSS atau CDN lainnya di sini jika diperlukan -->
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- Tambahkan elemen navigasi di sini sesuai kebutuhan -->
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>

    <!-- Tambahkan link JS atau CDN lainnya di sini jika diperlukan -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>
