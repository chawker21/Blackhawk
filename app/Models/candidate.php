<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
    protected $fillable =
        ['name', 'state', 'address_street_1', 'address_street_2', 'address_state', 'address_city', 'address_zip', 'party_full', 'party', 'candidate_id', 'candidate_status', 'candidate_inactive', 'office_full', 'office', 'incumbent_challenge_full', 'incumbent_challenge', 'district', 'district_number', 'first_file_date', 'last_file_date', 'last_f2_date', 'federal_funds_flag', 'active_through', 'load_date', 'flags'];

    public static function saveCandidatebyID($candidateID)
    {
        $apiKey = '13PTvvyIlc6z5v9l1e9iPEgFORKFAmqowkaSOXfh';
//        https://api.open.fec.gov/v1/candidate/P80003338/?page=1&sort=name&per_page=20&api_key=13PTvvyIlc6z5v9l1e9iPEgFORKFAmqowkaSOXfh
        $dataURL = "https://api.open.fec.gov/v1/candidate/$candidateID/?page=1&sort=name&per_page=20&api_key=$apiKey";
        $json = json_decode(file_get_contents($dataURL), true);
        $candidate = new candidate;
        $candidate->name = $json['results'][0]['name'];
        $candidate->state = $json['results'][0]['state'];
        $candidate->address_street_1 = $json['results'][0]['address_street_1'];
        $candidate->address_street_2 = $json['results'][0]['address_street_2'];
        $candidate->address_state = $json['results'][0]['address_state'];
        $candidate->address_city = $json['results'][0]['address_city'];
        $candidate->address_zip = $json['results'][0]['address_zip'];
        $candidate->party_full = $json['results'][0]['party_full'];
        $candidate->party = $json['results'][0]['party'];
        $candidate->candidate_id = $json['results'][0]['candidate_id'];
        $candidate->candidate_status = $json['results'][0]['candidate_status'];
        $candidate->candidate_inactive = $json['results'][0]['candidate_inactive'];
        $candidate->office_full = $json['results'][0]['office_full'];
        $candidate->office = $json['results'][0]['office'];
        $candidate->incumbent_challenge_full = $json['results'][0]['incumbent_challenge_full'];
        $candidate->incumbent_challenge = $json['results'][0]['incumbent_challenge'];
        $candidate->district = $json['results'][0]['district'];
        $candidate->district_number = $json['results'][0]['district_number'];
        $candidate->first_file_date = $json['results'][0]['first_file_date'];
        $candidate->last_file_date = $json['results'][0]['last_file_date'];
        $candidate->last_f2_date = $json['results'][0]['last_f2_date'];
        $candidate->federal_funds_flag = $json['results'][0]['federal_funds_flag'];
        $candidate->active_through = $json['results'][0]['active_through'];
        $candidate->load_date = $json['results'][0]['load_date'];
        $candidate->flags = $json['results'][0]['flags'];
        $candidate->FEC = 'https://www.fec.gov/data/candidate/' . $json['results'][0]['candidate_id'] . '/';
        $candidate->save();
    }
}
