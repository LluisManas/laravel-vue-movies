<?php

namespace App\Repository\Eloquent;

use Illuminate\Support\Facades\Http;

class MoviesRepository
{
        public function getPopularMovies()
        {
            $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get('http://api.themoviedb.org/3/movie/popular')
            ->json();

            return $popularMovies;
        }

        public function getTopRatedMovies()
        {
            $topRatedMovies = Http::withToken(config('services.tmdb.token'))
            ->get('http://api.themoviedb.org/3/movie/popular')
            ->json();

            return $topRatedMovies;
        }

        public function getLatestMovies()
        {
            $latestMovies = Http::withToken(config('services.tmdb.token'))
            ->get('http://api.themoviedb.org/3/movie/top_rated')
            ->json();

            return $latestMovies;
        }

}