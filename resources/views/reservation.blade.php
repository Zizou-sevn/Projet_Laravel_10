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
        <div class="formulaire_O">
            <h2 class="formulaire">Réservation</h2>
        </div>
        <div>
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        </div>

        <div class="formulaire_1">
            <form action="{{ route('main.reservation.store') }}" method="post">
                @csrf
                <div class="form_1">
                    <label for="nom"></label>
                    <input class="form_1_1" type="text" name="nom" id="nom" min="3" max="50"
                        placeholder="Nom" value="{{ old('nom') }}"required>
                    @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="formulaire_2">
                    <div>
                        <label for="couvert"></label>
                        <input class="form_1_2" type="text" name="couvert" id="couvert" min="1" max="16"
                            placeholder="Nombre de couverts" value="{{ old('couvert') }}"required>
                        @error('couvert')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label class="form_1_3_1" for="heure"></label>
                        <select class="form_1_3" name="heure" id="heure" required>
                            <option value=""></option>
                            @foreach ($heures as $heure)
                                <option value="{{ $heure }}" {{ old('heure') == $heure ? 'selected' : '' }}>
                                    {{ $heure }}</option>
                            @endforeach
                        </select>
                        @error('heure')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="formulaire_3">
                    <div>
                        <label for="jour"></label>
                        <input class="form_1_4" type="date" name="jour" id="jour" min="{{ date('Y-m-d') }}"
                            value="{{ old('jour') }}"required>
                        @error('jour')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form_1_5_1">
                        {{-- <label for="telephone">Numero de téléphone</label> --}}
                        <input class="form_1_5" type="phone" name="telephone" id="telephone"
                            value="{{ old('telephone') }}" placeholder="0663255876"required>
                        @error('telephone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="commentaire"></label>
                    <textarea class="form_1_6" name="commentaire" id="commentaire" cols="30" rows="10" placeholder="Message">{{ old('commentaire') }}</textarea>
                    @error('commentaire')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button class="form_1_7" type="submit"> <span class="form_1_7_1">Envoyer</span></button>
                </div>
            </form>
        </div>
    </section>
@endsection
