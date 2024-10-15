<header class="navbar navbar-expand-lg bg-success shadow-lg " data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">Homapon Health Center Monitoring System</a>
        <a href="{{ route('logout') }}" class="text-dark">{{ session('username') }}</a>
    </div>
</header>