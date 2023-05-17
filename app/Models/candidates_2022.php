<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidates_2022 extends Model
{
    protected $table="candidate_master_file_2022";

    public $timestamps = false;

    public function committee(){
        return $this->hasOne('App\Models\committees_2022', 'CMTE_ID', 'CAND_PCC');

    }

}
