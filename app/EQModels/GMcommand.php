<?php

namespace App\EQModels;

use Illuminate\Database\Eloquent\Model;

class GMcommand extends Model
{
    protected $connection = 'mysql_eq';
    protected $table = 'gmcommands';
}
