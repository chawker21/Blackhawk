<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ascii extends Model
{
    protected $table = 'asciis';
    protected $fillable =['DEC', 'OCT', 'HEX', 'BIN', 'Symbol', 'HTML_Number', 'HTML_Name', 'Description'];

    public static function insertData($ascii){
        $value=DB::table('asciis')->where('DEC', $ascii['DEC'])->get();
        if($value->count() == 0){
            DB::table('asciis')->insert($ascii);
        }
    }
}
