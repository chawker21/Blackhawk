<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Geo extends Model
{
    protected $table = 'geos';
    protected $fillable = [
        'countryabbr', 'country', 'state', 'ip', 'stateabbr', 'city', 'zip', 'lat', 'lon',

    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
