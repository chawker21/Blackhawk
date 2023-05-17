<?php

namespace App\EQModels;

use Illuminate\Database\Eloquent\Model;

class character_currency extends Model
{
    protected $connection = 'mysql_eq';
    protected $table = 'character_currency';
    protected $fillable = ['id', 'platinum', 'gold', 'silver', 'copper', 'platinum_bank', 'gold_bank', 'silver_bank', 'copper_bank', 'platinum_cursor', 'gold_cursor', 'silver_cursor', 'copper_cursor', 'radiant_crystals', 'career_radiant_crystals', 'ebon_crystals', 'career_ebon_crystals',];
}
