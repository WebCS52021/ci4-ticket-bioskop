<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Movies as ModelsMovies;

class Movies extends BaseController
{
    protected $movies_model;
    public function __construct()
    {
        $this->movies_model = new ModelsMovies();
    }
    public function index()
    {
        $movies = $this->movies_model->findAll();
        $data = [
            'title' => 'Daftar Film',
            'movies' => $movies
        ];
        return view('movies/index', $data);
    }
}
