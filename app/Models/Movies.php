<?php

namespace App\Models;

use CodeIgniter\Model;

class Movies extends Model
{
    protected $table            = 'movies';
    protected $primaryKey       = 'id';


    // Dates
    protected $useTimestamps = true;

}
