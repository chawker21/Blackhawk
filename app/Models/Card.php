<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = ['id', 'Title', 'Author', 'Subject', 'Year', 'Category', 'CardId', 'Side', 'LKF'];
}
