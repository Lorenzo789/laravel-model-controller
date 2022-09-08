@extends('layouts.main')

@section('main-content')
    <div>
        <ul>
            @forelse ($movies as $movie )
                <li>
                    {{ $movie->title }}
                </li>
            @empty
                <h3>NON CI SONO FILM</h3>
                
            @endforelse
        </ul>
    </div>
@endsection