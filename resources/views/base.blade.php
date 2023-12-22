<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>{{config('app.name')}} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div>
            <nav>
                <a href="{{ route('main.home')}}">Accueil</a>
                <a href="{{ route('main.menu')}}">Menu</a>
                <a href="/reservation">Reservation</a>
                <a href="/contact">Contact</a>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer>
        <!-- TODO -->
    </footer>
</body>
</html>