<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', (config('app.name') ? config('app.name').' - ' : '').'Rumah Roti')
    </title>

    {{-- Bootstrap CDN --}}
    <link rel="preconnect" href="https://cdn.jsdelivr.net" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    @stack('styles')

    <style>
        html, body { height: 100%; }
        body { 
            padding-top: 64px; /* kompensasi navbar fixed-top */
            background: #fffdf7;
        }
        .footer-shadow { box-shadow: 0 -2px 8px rgba(0,0,0,.04); }
    </style>

    @stack('head') 
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    @if (View::exists('components.navbar'))
        {{-- Pilih salah satu cara render komponen nav: --}}
        {{-- Jika komponen Blade class-based --}}
        <x-navbar />
        {{-- ATAU jika partial biasa: --}}
        {{-- @include('components.navbar') --}}
    @else
        <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
            <div class="container">
                <a class="navbar-brand fw-semibold" href="{{ url('/') }}">Rumah Roti</a>
            </div>
        </nav>
    @endif

    {{-- Konten utama --}}
    <main class="container flex-grow-1 my-4">
        {{-- Flash message sederhana --}}
        @if (session('status'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </main>

    {{-- Footer --}}
    @if (View::exists('components.footer'))
        @include('components.footer')
    @else
        <footer class="mt-auto bg-light footer-shadow py-3">
            <div class="container small text-muted d-flex justify-content-between">
                <span>© {{ now()->year }} Rumah Roti</span>
                <span>v{{ app()->version() }}</span>
            </div>
        </footer>
    @endif

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>