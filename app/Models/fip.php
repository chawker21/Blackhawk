<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fip extends Model
{
    protected $table = 'fips';

    protected $fillable = ['long', 'abbr', 'fip'];

    public static function savefipinfo($data)
    {
        $fip = new fip();
        $fip->abbr = $data[1];
        $fip->long = $data[0];
        $fip->fip = str_pad($data[2], 2, '0', STR_PAD_LEFT);
        $fip->save();
    }
}
