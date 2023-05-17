<?php

namespace App\EQModels;

use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
    protected $connection = 'mysql_eq';

    protected $table = 'zone';

    protected $fillable = ['id', 'safe_x', 'safe_y', 'safe_z'];
}
