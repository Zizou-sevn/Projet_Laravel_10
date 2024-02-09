<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
                <ul>
                    <li><a href="{{ route('main.home')}}">Accueil</a></li>
                    <li><a href="{{ route('main.menu')}}">Menu</a></li>
                    <li><a href="{{ route('main.reservation')}}">Reservation</a></li>     
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
    <footer>
    
    </footer>
</body>

</html>