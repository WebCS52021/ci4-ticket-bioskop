<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Movies extends Seeder
{
    public function run()
    {
        $movies_data = [
            [
                'movie_title' => 'Avangers Infinity War',
                'slug' => 'avangers-infinity-war',
                'movie_thumbnail' => "avangers-infinity-wars.jpeg",
                'movie_desc' => 'Film ini merupakan awal dari berkumpulnya para avangers untuk bla bla bla',
                'movie_genre' => "action, comedy, romances",
                'movie_rating' => 4.5,
                'movie_price' => "Rp. 35.000"
            ],
            [
                'movie_title' => 'Spiderman No Way Home',
                'slug' => 'spiderman-nwh',
                'movie_thumbnail' => "spiderman-nwh.jpeg",
                'movie_desc' => 'Film ini merupakan awal dari berkumpulnya para spiderman di universe lain untuk bla bla bla',
                'movie_genre' => "action, comedy, historical",
                'movie_rating' => 4.8,
                'movie_price' => "Rp. 30.000"
            ]
        ];

        foreach($movies_data as $data){
			$this->db->table('movies')->insert($data);
		}
    }
}
