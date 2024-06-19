@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 pt-24">
        <!-- start top-rated-tvshow -->
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-white-500 text-lg font-semibold">Top Rated Tv Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRatedTvShows as $tvshow)
                    <x-tvshow-card :tvshow="$tvshow" />
                @endforeach
            </div>
        </div> <!-- end top-rated-tvshow -->

        <!-- start popular-tvshow -->
        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-white-500 text-lg font-semibold">Popular Tv Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($popularTvShows as $tvshow)
                    <x-tvshow-card :tvshow="$tvshow" />
                @endforeach
            </div>
        </div> <!-- end popular-tvshow -->
    </div>
@endsection
