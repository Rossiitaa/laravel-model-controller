@extends('layouts.app')
@section('title', 'Movie')

@section('content')
    <ul>
        @forelse ($movies as $movie)
            <li>
                {{ $movie->title }}
            </li>
            <li>
                {{ $movie->original_title }}
            </li>
            <li>
                {{ $movie->nationality }}
            </li>
            <li>
                {{ $movie->date }}
            </li>
            <li>
                {{ $movie->vote }}
            </li>
        @empty
            
        @endforelse
    </ul>
@endsection