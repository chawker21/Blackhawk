<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class legislator extends Model
{
    protected $table = 'legislators';

    protected $fillable = ['last_name', 'first_name', 'middle_name', 'suffix', 'nickname', 'full_name', 'birthday', 'gender', 'type',
        'state', 'district', 'senate_class', 'party', 'url', 'address', 'phone', 'contact_form', 'rss_url', 'twitter', 'facebook',
        'youtube', 'youtube_id', 'bioguide', 'thomas_id', 'opensecrets_id', 'lis_id', 'fec_ids', 'cspan_id', 'govtrack_id', 'votesmart_id',
        'ballotpedia_id', 'washington_post_id', 'icpsr_id', 'wikipedia_id'];

    public static function saveLegislators($data)
    {
        $fips = fip::where('long', '=', $data[9])->get();


        $legislator = new legislator();
        $legislator->last_name = $data[0];
        $legislator->first_name = $data[1];
        $legislator->middle_name = $data[2];
        $legislator->suffix = $data[3];
        $legislator->nickname = $data[4];
        $legislator->full_name = $data[5];
        $legislator->birthday = $data[6];
        $legislator->gender = $data[7];
        $legislator->type = $data[8];
        $legislator->state = $data[9];
        $legislator->district = str_pad($data[10], 2, '0', STR_PAD_LEFT);
        $legislator->senate_class = $data[11];
        $legislator->party = $data[12];
        $legislator->url = $data[13];
        $legislator->address = $data[14];
        $legislator->phone = $data[15];
        $legislator->contact_form = $data[16];
        $legislator->rss_url = $data[17];
        $legislator->twitter = $data[18];
        $legislator->facebook = $data[19];
        $legislator->youtube = $data[20];
        $legislator->youtube_id = $data[21];
        $legislator->bioguide = $data[22];
        $legislator->thomas_id = $data[23];
        $legislator->opensecrets_id = $data[24];
        $legislator->lis_id = $data[25];
        $legislator->fec_ids = $data[26];
        $legislator->cspan_id = $data[27];
        $legislator->govtrack_id = $data[28];
        $legislator->votesmart_id = $data[29];
        $legislator->ballotpedia_id = $data[30];
        $legislator->washington_post_id = $data[31];
        $legislator->icpsr_id = $data[32];
        $legislator->wikipedia_id = $data[33];


        $legislator->save();
    }
}
