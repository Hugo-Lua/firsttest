@extends('layout')
@section('content')




<div class="container-fluid pt-3">
  <h1 class="text-light">{{ $game['title'] }}</h1>
  <div class="container-fluid text-center">
  <img src="{{ asset('images/' . str_replace(':', '.col', str_replace(' ', '_', $game['title'])) . '/cover.jpg') }}" 
    alt="Cover of game" 
    class="w-100 p-5"
    style="max-width: 1000px"
    >
  </div>
  <button class="btn btn-primary">Buy</button>
  <p class="text-light">{{ $game['description'] }}</p>
</div>


@endsection('content')