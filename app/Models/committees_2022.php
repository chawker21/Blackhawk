<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class committees_2022 extends Model
{
    protected $table="candidate_master_committee_summary_2022";

    public $timestamps = false;

    public function committee(){
        return $this->belongsToMany('App\Models\candidates_2022', 'CAND_PCC', 'CMTE_ID');

    }
}
