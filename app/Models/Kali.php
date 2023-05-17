<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kali extends Model
{
    protected $table = 'Kali';

    protected $fillable = [
        'title', 'body', 'keywords', 'link',
    ];
}
