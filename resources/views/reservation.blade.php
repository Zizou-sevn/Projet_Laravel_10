@extends('base')

@section('content')
@php
$heures = [

    //  creneau du matin
    '12:00:00' => '12:00',
    '12:30:00' => '12:30',
    '13:00:00' => '13:00',
    '13:30:00' => '13:30',

    //  creneaux du soir
    '20:00:00' => '20:00',
    '20:30:00' => '20:30',
    '21:00:00' => '21:00',
    '21:30:00' => '21:30',

    ];
@endphp

<section>
    <h2>Réservation</h2>
    <div>
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    <form action="{{ route ('main.reservation.store') }}" method="post">
        @csrf
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" min="3" max="50" value="{{old ('nom')}}"required>
            @error('nom')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="couvert">Nombre de couverts</label>
            <input type="text" name="couvert" id="couvert" min="1" max="16" value="{{old ('couvert')}}"required>
            @error('couvert')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="heure">Heure</label>
            <select name="heure" id="heure" required>
                <option value=""></option>
                @foreach ($heures as $heure)
                <option value="{{$heure}}" {{old ('heure')==$heure ? 'selected' : ''}}>{{$heure}}</option>
                @endforeach
            </select>
            @error('heure')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="jour">Jour</label>
            <input type="date" name="jour" id="jour" min="{{date('Y-m-d')}}" value="{{old ('jour')}}"required>
            @error('jour')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="telephone">Numero de téléphone</label>
            <input type="phone" name="telephone" id="telephone" value="{{old ('telephone')}}" placeholder="0663255876"required>
            @error('telephone')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="commentaire">Commentaires</label>
            <textarea name="commentaire" id="commentaire" cols="30" rows="10">{{old ('commentaire')}}</textarea>
            @error('commentaire')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit">Reserver</button>
        </div>
    </form>

</section>
@endsection