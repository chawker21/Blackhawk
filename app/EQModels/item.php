<?php

namespace App\EQModels;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $connection = 'mysql_eq';
    public static function search($request, $query)
    {
        $items = item::where('name', 'like', '%' . $query . '%')->paginate(25);

        return ($items);
    }
}
