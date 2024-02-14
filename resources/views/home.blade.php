@extends('base')
@section('title', 'Accueil')

@section('content')


    <!-- Premier Cycle -->

    <div class="barre"></div>

    <div class="ma_bite">

        <div class="barre_4"></div>
        <div class="barre_3">

            <h2 class="title_2" id="id_2">Menu</h2>

            {{-- <p class="title_3">Fait avec Amour</p> --}}

            <p class="para"><span class="p_1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
                    eveniet quaerat repudiandae commodi vitae, nisi unde. Quo aliquid suscipit iste necessitatibus odit
                    facilis ex, non neque cupiditate quis vitae magni? Explorez nos entrées, plats et desserts. Alliant
                    nouveautés et
                    classiques.</span></p>

            <a href={{ route('main.menu') }}><button type="button" class="button_1">Voir le
                    Menu</button></a>
        </div>

        <div class="barre_21">
            <h2 class="title_2" id="id_20">Reservation</h2>

            <p class="para"><span class="p_1">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perspiciatis, aperiam repellat. Laboriosam corporis autem perspiciatis inventore sapiente quae
                    itaque ullam consectetur est quam error nisi, distinctio deleniti, voluptates sit rem. Explorez nos
                    entrées, plats et desserts. Alliant nouveautés et
                    classiques.</span></p>
            <div class="button_origin">
                <a href={{ route('main.reservation') }}><button type="button" class="button_1"> <span
                            class="menu">Reserver</span></button></a>
            </div>
        </div>
        <div class="barre_20"></div>

        <div class="barre_23"></div>
        <div class="barre_24">

            <h2 class="title_2" id="id_2">Contact</h2>

            {{-- <p class="title_3">Fait avec Amour</p> --}}

            <p class="para"><span class="p_1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
                    eveniet quaerat repudiandae commodi vitae, nisi unde. Quo aliquid suscipit iste necessitatibus odit
                    facilis ex, non neque cupiditate quis vitae magni? Explorez nos entrées, plats et desserts. Alliant
                    nouveautés et
                    classiques.</span></p>

            <button type="button" class="button_1"><a href="#"></a> <span class="menu">Contactez-nous</span></button>
        </div>
    </div>

@endsection