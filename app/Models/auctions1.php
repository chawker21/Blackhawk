<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class auctions1 extends Model
{

    protected $table = 'auctions1';
    protected $fillable = [
        'images', 'main', 'Description', 'Make', 'Model', 'Year', 'Location', 'End', 'Bid'
    ];
}
