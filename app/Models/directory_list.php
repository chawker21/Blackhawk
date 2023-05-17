<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class directory_list extends Model
{
    protected $table = "directory_list";

    protected $fillable = [
        'filename', 'path'
    ];
}
