<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Welcome to Homapon Health Center!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link href="https://fonts.cdnfonts.com/css/noto-sans-sora-sompeng" rel="stylesheet" />
    @vite('resources/css/landing.css')
</head>

<body class="bg-dark">
    <header class="navbar navbar-expand-lg bg-success shadow-lg" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="navbar-brand fs-3">Homapon Health Center Monitoring System</div>
            <div class="container-fluid">
                <a href="#hero" class="btn text-dark fs-5">Hero</a>
                <a href="#about" class="btn text-dark fs-5">About</a>
                <a href="#services" class="btn text-dark fs-5">Services</a>
                <a href="#contact" class="btn text-dark fs-5">Contact</a>
            </div>

            <a href="{{ route('register.form') }}" class="btn btn-light text-success fs-5">Register</a>
        </div>
    </header>
    <main class="text-white">
        <section id="hero">
            <h1>Welcome to Homapon Health Center</h1>
            <a href="{{ route('register') }}" class="btn btn-success fs-4">Get Started</a>
        </section>
        <hr />
        <section id="about">
            <h2>About Us</h2>
            <p>
                Information about the health center, its mission, and
                vision.
            </p>
        </section>
        <hr />
        <section id="services">
            <h2>Our Services</h2>
            <ul>
                <li>Immunization</li>
                <li>Medical Care</li>
                <li>Family Planning</li>
                <li>Consultation</li>
            </ul>
        </section>
        <hr />
        <section id="contact">
            <h2>Contact Us</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" />
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" />
                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea>
                <button type="submit">Send</button>
            </form>
        </section>
        <hr />
        <footer class="text-center text-secondary py-2">
            <p>
                Copyright &copy; 2024 Health Monitoring System<br />
                <a href="#" class="text-secondary">Terms and Conditions</a>
                | <a href="#" class="text-secondary">Privacy Policy</a> |
                <a href="#" class="text-secondary">About Us</a>
            </p>
        </footer>
    </main>
</body>
@include('partials.script')

</html>
