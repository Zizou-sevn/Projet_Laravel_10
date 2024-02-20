@extends('base')
@section('title', 'Confirmation')

@section('content')
    <div class="barre_43">
        <div class="barre_44">
            <h2 class="TITLE_1">Confirmation</h2>

            <p class="PARRA">Votre réservation a bien ete pris en compte</p>
            <ul class="sous_barre_24">
                <li>{{ $reservation->nom }}</li>
                <li>{{ $reservation->couvert }}</li>
                <li>{{ date('d/m/y', strtotime($reservation->jour)) }}</li>
                <li>{{ $reservation->heure }}</li>
                <li>{{ $reservation->telephone }}</li>
                @if ($reservation->commentaires)
                    <li>{{ $reservation->commentaires }}</li>
                @endif
            </ul>
            <p class="PARRA_2">Merci pour votre reservation nous vous enverrons un mail <br> 2 heures avant votre RDV</p>
        </div>
    </div>
@endsection
