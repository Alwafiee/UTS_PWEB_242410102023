{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">    <div class="container">

        {{-- Logo --}}
        <a class="navbar-brand text-dark fw-bold" href="#">Rumah Roti</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        {{-- Navigasi --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                {{-- Menu Dashboard --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('dashboard') }}?username={{ request('username', 'Guest') }}">
                        Dashboard
                    </a>
                </li>
                
                {{-- Menu Pengelolaan --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('pengelolaan') }}?username={{ request('username', 'Guest') }}">
                        Daftar Roti
                    </a>
                </li>
                
                {{-- Menu Profile --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('profile') }}?username={{ request('username', 'Guest') }}">
                        Profile
                    </a>
                </li>
                
                {{-- Menu Logout --}}
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('login') }}">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>