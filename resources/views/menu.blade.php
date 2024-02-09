@extends ('base')

@section ('content')


        <section>
            <h2>Menu</h2>
            @foreach ($categories as $categorie)
                <div>
                    <h3>{{ $categorie->nom}} </h3>
                    <ul class="plats">
                        @foreach ($categorie->plats() as $plat)
                            <li>
                                <a href="{{ route('main.plat', ['id' => $plat->id]) }}">
                                <img src="{{ asset('images/'.$plat->fichier) }} " alt="{{ $plat->nom }}"><a href=""></a>
                                <a href="{{ route('main.plat', ['id' => $plat->id]) }}">
                                <h4>{{ $plat->nom }}</h4>
                                <span class="prix">{{ $plat->prix }}</span>
                                <ul>
                                    @foreach ($plat->etiquettes() as $etiquette)
                                    <li>{{ $etiquette->nom }}</li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach

                    </ul>
                </div>
            @endforeach
        </section>
@endsection