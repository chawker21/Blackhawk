<?php

namespace App\EQModels;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $connection = 'mysql_eq';
    protected $table = 'account';

    protected $fillable = ['id', 'name ', 'charname', 'sharedplat', 'status', 'lsaccount_id ', 'gmspeed', 'revoked', 'karma', 'minilogin_ip', 'hideme', 'rulesflag', 'suspendeduntil', 'time_creation', 'expansion', 'ban_reason', 'suspend_reason'];


    public static function account_update($request, $id)
    {
        $account = account::find($id);
        $input = $request->all();
        $account->timestamps = false;
        $account->fill($input)->save();
    }
}
