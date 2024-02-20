@extends ('base')

@section('content')
    <section class="SECTION">
        <h2 class="Menu_1_1">Menu</h2>
        @foreach ($categories as $categorie)
            <div class="DIV">

                <h3 class="H3">{{ $categorie->nom }} </h3>

                <ul class="plats">

                    @foreach ($categorie->plats() as $plat)
                        <li class="CASE">

                            <a  href="{{ route('main.plat', ['id' => $plat->id]) }}">

                                <img class="IMAGES" src="{{ asset('images/' . $plat->fichier) }} " alt="{{ $plat->nom }}">
                                <div class="DIV_1">
                                    <h4 class="H4">{{ $plat->nom }}</h4>

                                    <div class="DIV_2">
                                        <div class="ETIQUETTES_2">
                                            @foreach ($plat->etiquettes() as $etiquette)
                                                <div class="ETIQUETTES">{{ $etiquette->nom }}</div>
                                            @endforeach
                                        
                                        </div>

                                        <div class="PRIX">{{ $plat->prix }} €</div>
                                    </div>
                                </div>

                        </li>

                    @endforeach
                </ul>
            </div>
        @endforeach
    </section>
@endsection
