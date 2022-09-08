@extends('layouts.main')

@section('main-content')
    <section class="movie-container">
        <div class="container">
            @forelse ($movies as $movie )
                <div class="card">
                    <h2>{{ $movie->title }}</h2>
                    <pre> Date: {{ $movie->date }}</pre>
                    <pre> Nationality: {{ $movie->nationality }}</pre>
                    <pre> Original Title:{{ $movie->original_title }}</pre>
                    <pre> Vote: {{ $movie->vote }}</pre>
                </div>
            @empty
                <h3>NON CI SONO FILM</h3>
            @endforelse
        </div>
    </section>
@endsection