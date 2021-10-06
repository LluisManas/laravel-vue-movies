<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Eloquent\MoviesRepository;

class MoviesController extends Controller
{
    /**
     * Movie Repository instance
     * 
     * @var MoviesRepository
     */
    protected $moviesRepository;

    public function __construct(MoviesRepository $moviesRepository)
    {
        $this->moviesRepository = $moviesRepository;
    }

    public function popularMovies()
    {
        $popularMovies = $this->moviesRepository->getPopularMovies();

        return $popularMovies;
    }

    public function topRatedMovies()
    {
        $topRatedMovies = $this->moviesRepository->getTopRatedMovies();

        return $topRatedMovies;
    }

    public function latestMovies()
    {
        $latestMovies = $this->moviesRepository->getLatestMovies();

        return $latestMovies;
    }
}
