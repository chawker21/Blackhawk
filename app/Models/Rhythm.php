<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rhythm extends Model
{
    protected $table = "rhythm";

    protected $fillable = [
        'name', 'email', 'message'
    ];
}
