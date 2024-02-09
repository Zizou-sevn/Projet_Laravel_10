@extends('base')
@section ('title', 'Confirmation')

@section('content')
<h2>Confirmation</h2>

<p>Votre réservation a bien ete pris en compte</p>
<ul>
    <li>{{$reservation->nom}}</li>
    <li>{{$reservation->couvert}}</li>
    <li>{{date('d/m/y', strtotime($reservation->jour))}}</li>
    <li>{{$reservation->heure}}</li>
    <li>{{$reservation->telephone}}</li>
    @if ($reservation->commentaires)
    <li>{{$reservation->commentaires}}</li>
    @endif
</ul>
@endsection