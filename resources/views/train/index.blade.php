@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    @forelse($trains as $train)
      <p>
        <strong>Azienda</strong>: {{ $train->azienda }} <br>
        <strong>Stazione di partenza</strong>: {{ $train->stazione_partenza }} <br>
        <strong>Stazione di arrivo</strong>: {{ $train->stazione_arrivo }}
      </p>
      <hr>
    @empty
      <h2>Non ci sono treni</h2>
    @endforelse
  </section>
@endsection
