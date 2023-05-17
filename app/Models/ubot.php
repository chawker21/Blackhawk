<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ubot extends Model
{


    protected $fillable = [
        'title', 'body', 'keywords', 'link',
    ];
}
