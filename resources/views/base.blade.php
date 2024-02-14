<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>{{config('app.name')}} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <!-- Premier Cycle -->

    <div class="font">
        <h1 id="id_1" class="title-big"><a href={{ route('main.home') }}>O'Cnamo</a></h1>

        <div class="barre_2">

            <ul class="sous-barre">
                <li><a href={{ route('main.home') }}>Accueil</a></li>
                <li><a href={{ route('main.menu') }}>Menu</a></li>
                <li><a href={{ route('main.reservation') }}>Reservation</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>

    @yield('content')

    

    <footer class="barre_25">
        @section('footer')

            <div class="barre_26">
                <ul class="sous-barre_2">
                    <li>Adresse</li>
                    <li>Horaire d’ouverture</li>
                    <li>Contact</li>
                </ul>
            </div>

            <div class="barre_27">

                <ul class="sous-barre_3">
                    <ul class="sous-barre_4">
                        <li>5 Bd LouiXIV <br>59800 Lille</li>
                    </ul>

                    <ul class="sous-barre_5">
                        <li> <span class="brun">lundi - Vendredi</span> (12h-14h) à (19h-23h) <br>
                            Samedi et Dimanche (12h-14h) à (19h-23h)</li>
                    </ul>


                    <ul class="sous-barre_6">
                        <li class="brun_2">
                            <div class="icone_1"></div> ocnamo@gmail.com
                        </li>
                        <li class="brun_3">
                            <div class="icone_2"></div> 06-32-45-67-21
                        </li>
                    </ul>

                </ul>
            </div>

            <div class="trait"></div>
            <br>

            <div class="barre_30">

                <div class="barre_29">
                    <div class="icone_3"></div>
                    <p class="para_3">2024, Ocnamo, tous droits réservés</p>
                </div>

                <div class="barre_28">
                    <ul class="sous-barre_7">
                        <li><a href="https://www.facebook.com/FormationsCnamLille" class="li_2"></a></li>
                        <li><a href="https://www.instagram.com/cnam_hautsdefrance/" class="li_3"></a></li>
                        <li><a href="https://www.tiktok.com/@cnamidf" class="li_4"></a></li>
                        <li><a href="https://twitter.com/LeCnam?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                                class="li_5"></a></li>
                    </ul>

                </div>
            </div>
        @show
    </footer>
</body>

</html>