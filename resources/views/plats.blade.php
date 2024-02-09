@extends('base')


@section('content')
<section>
    <img src="{{ asset('Images/'.$plats->fichier) }} " alt="{{ $plats->nom }}">
    <h2>{{ $plats->nom }}</h2>
    <span class="prix">{{ $plats->prix }}</span>
    <ul>
        @foreach ($plats->etiquettes() as $etiquette)
        <li>{{ $etiquette->nom }}</li>
        @endforeach
    </ul>
</section>

@endsection