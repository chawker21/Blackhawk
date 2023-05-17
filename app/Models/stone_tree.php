<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class stone_tree extends Model
{
    protected $table = 'stone_tree';

    protected $fillable = [
        'first_name', 'middle_name', 'last_name', 'born_name', 'surname', 'birth_year', 'death_year', 'birth_id', 'father_id', 'mother_id', 'spouse_id', 'child_id', 'sibling_id'
    ];
    public $timestamps = false;

    public function birthplace(){
        return $this->hasOne('App\Models\stone_tree_places', 'id', 'birth_id');

    }
    public function deathplace(){
        return $this->hasOne('App\Models\stone_tree_places', 'id', 'death_id');

    }
    public function father(){
        return $this->hasOne('App\Models\stone_tree', 'id', 'father_id');

    }
    public function mother(){
        return $this->hasOne('App\Models\stone_tree', 'id', 'mother_id');

    }
    public function spouse(){
        return $this->hasOne('App\Models\stone_tree', 'id', 'spouse_id');

    }

}
