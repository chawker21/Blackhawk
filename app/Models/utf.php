<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class utf extends Model
{
    protected $table = 'utfs';
    protected $fillable =['Unicode', 'Character', 'utf_binary', 'HTML_Number', 'HTML_Name', 'Description'];

    public static function insertData($utf){
        $value=DB::table('utfs')->where('Unicode', $utf['Unicode'])->get();

        if($value->count() == 0){
            DB::table('utfs')->insert($utf);
        }
    }
}
