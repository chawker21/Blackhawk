<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\stone_tree as stone_tree;

class stone_tree_places extends Model
{

    protected $table = 'stone_tree_places';
    protected $fillable = [
        'state', 'county', 'lat', 'lng',
    ];
    public $timestamps = false;

    public function Birth(){
        return $this->hasOne('App\Models\stone_tree', 'birth_id', 'id');
    }
    public function Death(){
        return $this->hasOne('App\Models\stone_tree', 'death_id', 'id');
    }



}
