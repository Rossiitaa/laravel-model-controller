@extends('layouts.app')
@section('title', 'Movie')

@section('content')
    <ul class="row p-5 ">
        @forelse ($movies as $movie)
        <div class="card col-3 p-3 m-4">
            <div class="card-body">
                <h2 class="card-title">{{ $movie->title }}</h2>
                <h5 class="card-subtitle my-2">{{ $movie->original_title }}</h5>
                <p class="card-text">
                    Nationality: {{ $movie->nationality}}
                </p>
                <p class="card-text">
                    Date: {{ $movie->date }}
                </p>
                <p class="card-text">
                    Vote: {{ $movie->vote }}
                </p>
            </div>
        </div>
        @empty
            
        @endforelse
    </ul>
@endsection