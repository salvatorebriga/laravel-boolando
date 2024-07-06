@extends('layouts.app')
@section('name')
  <h3> {{ $title }} </h3>
@endsection
@section('main')
  <div class="row">
    @foreach ($data as $card)
      <div class="col">
        <div class="card">
          <img class="front" src="{{ Vite::asset('resources/img/' . $card['frontImage']) }}" alt="product front" />
          <img class="back" src="{{ Vite::asset('resources/img/' . $card['backImage']) }}" alt="product back" />
          <p> {{ $card['brand'] }} </p>
          <h3>{{ $card['name'] }}</h3>
          <span class="orange"> {{ $card['price'] }}$ </span>
          <span class="line-throught">{{ $card['price'] }}$ </span>
          <div class="labels">
            @foreach ($card['badges'] as $value)
              <div class="{{ $value['type'] }}">
                <p> {{ $value['value'] }} </p>
              </div>
            @endforeach
          </div>
          <div class="hearth">
            <span @class(['red' => $card['isInFavorites']])>&#10084;</span>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
