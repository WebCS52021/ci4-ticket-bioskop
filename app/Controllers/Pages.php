<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        //$movies = $this->movies_model->findAll();
        $data = [
            'title'=> 'Home',
            'movies' => $this->movies_model->getmovies()
            
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

    public function order($slug)
    {
        $data = [
            'title'=> 'Order',
            'movies' => $this->movies_model->getmovies($slug)
        ];

        return view('pages/order', $data);
    }

    public function pembayaran()
    {
        $data = [
            'title'=> 'Pembayaran',
        ];
        return view('pages/order/pembayaran', $data);
    }
    
    public function recomend()
    {
        $movies = $this->movies_model->orderBy('movie_rating', 'DESC');
        $data = [
            'title'=> 'Recomend',
            'movies' => $this->movies_model->getmovies()
        ];

        return view('pages/recomend', $data);
    }

    public function Detail($slug)
    {
      
        $data = [
            'title'=> 'Recomend',
            'movies' => $this->movies_model->getmovies($slug)
        ];

        return view('pages/detail', $data);
    }
    public function invoices($slug)
    {
        $data = [
            'title'=> 'Invoices',
            'movies' => $this->movies_model->getmovies($slug)
        ];

        return view('pages/invoices', $data);
    }
}
