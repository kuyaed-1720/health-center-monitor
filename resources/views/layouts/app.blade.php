<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @include('partials.link')
    <title>@yield('title')</title>
</head>

<body>
    @include('partials.header')
    <div class="main-wrapper d-flex flex-row justify-between bg-dark">
        @include('partials.nav')
        <main class="py-2 px-2 border border-secondary text-white">
            @yield('content')
            @include('partials.footer')
        </main>
    </div>
</body>
@include('partials.script')

</html>
