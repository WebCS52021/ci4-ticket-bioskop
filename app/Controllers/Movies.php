<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Movies extends BaseController
{
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
