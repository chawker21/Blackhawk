<?php

namespace App\EQModels;

use Illuminate\Database\Eloquent\Model;

class base_data extends Model
{
    protected $connection = 'mysql_eq';
    protected $table = 'base_data';
}
