<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sonoff extends Model
{
    protected $table = 'sonoffs';
    protected $fillable = ['id', 'name', 'topic', 'message', 'host', 'port'];

}
