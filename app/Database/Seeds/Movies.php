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
                'movie_price' => "35000"
            ],
            
            [
                'movie_title' => 'Spiderman No Way Home',
                'slug' => 'spiderman-nwh',
                'movie_thumbnail' => "spiderman-nwh.jpeg",
                'movie_desc' => 'Film ini merupakan awal dari berkumpulnya para spiderman di universe lain untuk bla bla bla',
                'movie_genre' => "action, comedy, historical",
                'movie_rating' => 4.8,
                'movie_price' => "30000"
            ],
            [
                'movie_title' => 'Dear Nathan2 - Thank you salma',
                'slug' => 'dear-nathan-2',
                'movie_thumbnail' => "dear-nathan-2.jpeg",
                'movie_desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere unde porro cumque inventore consequuntur pariatur rerum voluptates reprehenderit fugit, placeat dolores? Sequi minus deserunt aliquam repudiandae at harum ad unde ullam totam laudantium inventore dicta doloremque illum voluptate exercitationem, perspiciatis illo ea eos dolores autem veniam fuga sint! Ipsam temporibus ullam nostrum unde, ipsum dolorem id perferendis. Asperiores, suscipit esse nulla, nam quasi, odit ea consequuntur et iusto deleniti eligendi! Et provident nihil illo distinctio voluptatibus placeat quia perspiciatis, non ipsa itaque ut quidem, deleniti repellendus est? Dolorem magni, ab, quidem facilis optio nisi vero laborum inventore delectus dolores ex.',
                'movie_genre' => "romance, comedy",
                'movie_rating' => 4.1,
                'movie_price' => "25000"
            ],
            [
                'movie_title' => 'Cinta Pertama, Kedua dan Ketiga',
                'slug' => 'cinta-pertama-2-3',
                'movie_thumbnail' => "cinta-pertama.jpg",
                'movie_desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere unde porro cumque inventore consequuntur pariatur rerum voluptates reprehenderit fugit, placeat dolores? Sequi minus deserunt aliquam repudiandae at harum ad unde ullam totam laudantium inventore dicta doloremque illum voluptate exercitationem, perspiciatis illo ea eos dolores autem veniam fuga sint! Ipsam temporibus ullam nostrum unde, ipsum dolorem id perferendis. Asperiores, suscipit esse nulla, nam quasi, odit ea consequuntur et iusto deleniti eligendi! Et provident nihil illo distinctio voluptatibus placeat quia perspiciatis, non ipsa itaque ut quidem, deleniti repellendus est? Dolorem magni, ab, quidem facilis optio nisi vero laborum inventore delectus dolores ex.',
                'movie_genre' => "romance, comedy",
                'movie_rating' => 4.0,
                'movie_price' => "25000"
            ],
            [
                'movie_title' => 'Makmum 2',
                'slug' => 'makmum-2',
                'movie_thumbnail' => "makmum-2.jpeg",
                'movie_desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere unde porro cumque inventore consequuntur pariatur rerum voluptates reprehenderit fugit, placeat dolores? Sequi minus deserunt aliquam repudiandae at harum ad unde ullam totam laudantium inventore dicta doloremque illum voluptate exercitationem, perspiciatis illo ea eos dolores autem veniam fuga sint! Ipsam temporibus ullam nostrum unde, ipsum dolorem id perferendis. Asperiores, suscipit esse nulla, nam quasi, odit ea consequuntur et iusto deleniti eligendi! Et provident nihil illo distinctio voluptatibus placeat quia perspiciatis, non ipsa itaque ut quidem, deleniti repellendus est? Dolorem magni, ab, quidem facilis optio nisi vero laborum inventore delectus dolores ex.',
                'movie_genre' => "horror, thriller",
                'movie_rating' => 4.5,
                'movie_price' => "25000"
            ]
        ];

        foreach($movies_data as $data){
			$this->db->table('movies')->insert($data);
		}
    }
}
