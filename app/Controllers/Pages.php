<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title'=> 'Home',
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
        $data = [
            'title'=> 'Catalog',
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
