<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $movies = $this->movies_model->findAll();
        $data = [
            'title'=> 'Home',
            'movies' => $movies
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title'=> 'About',
        ];

        return view('pages/about', $data);
    }

    public function catalog()
    {
        $movies = $this->movies_model->findAll();
        $data = [
            'title'=> 'Catalog',
            'movies' => $movies
        ];

        return view('pages/catalog', $data);
    }
    public function recomend()
    {
        $data = [
            'title'=> 'Recomend',
        ];

        return view('pages/recomend', $data);
    }
}
