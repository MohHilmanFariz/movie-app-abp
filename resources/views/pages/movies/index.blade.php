@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 pt-24">
        <!-- Start popular-movies -->
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-white-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> <!-- End popular-movies -->

        <!-- Start now-playing-movies -->
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-white-500 text-lg font-semibold">Now Playing Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($nowPlayingMovies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div> <!-- End now-playing-movies -->
    </div>
@endsection
