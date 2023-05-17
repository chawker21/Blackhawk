<?php

namespace App\EQModels;

use Illuminate\Database\Eloquent\Model;

class character_skills_by_name extends Model
{
    protected $connection = 'mysql_eq';
    protected $table = 'character_skills_by_name';
}
