@extends('layouts.main')

@section('title', 'Movies')

@section('content')
@forelse($movies as $m)
<div class="card">
    <div class="card-body w-25">
        <h5 class="card-title">Titolo: {{$m->title}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Titolo originale: {{$m->original_title}}</h6>
        <p class="card-text">Nationality: {{$m->nationality}}</p>
        <p><i>Data d'uscita: {{$m->date}}</i></p>
        <a href="#" class="card-link">Card link</a>
    </div>
</div>
@empty
<div class="text-center">
    <h2>NON CI SONO FILM!</h2>
</div>
@endforelse
@endsection