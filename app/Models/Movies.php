<?php

namespace App\Models;

use CodeIgniter\Model;

class Movies extends Model
{
    protected $table            = 'movies';
    protected $primaryKey       = 'id';


    // Dates
    protected $useTimestamps = true;

    public function getmovies($slug = false){
        
        if ($slug == false){
            return $this->findAll();

        }
        return $this->where(['slug' => $slug])->first();
    }
}
