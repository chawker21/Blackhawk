<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class civil extends Model
{
    protected $table = 'civil';

    protected $hidden = [
        'created_at', 'updated_at', 'id',
    ];

    protected $fillable = [
        'Title', 'Description', 'Side', 'Year'
    ];
}
