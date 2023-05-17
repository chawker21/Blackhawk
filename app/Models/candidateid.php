<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\candidate;
class candidateid extends Model
{
    protected $fillable =
        ['name', 'candidateID', 'office'];

    public static function getAllCandidateIDs($candidate)
    {
        ini_set('max_execution_time', 300); //300 seconds = 5 minutes
            $apiKey = '13PTvvyIlc6z5v9l1e9iPEgFORKFAmqowkaSOXfh';
            $dataURL = "https://api.open.fec.gov/v1/names/candidates/?q=$candidate&api_key=$apiKey";
            $results = json_decode(file_get_contents($dataURL), true);
            $candidateData = $results['results'];
            foreach ($candidateData as $candidateData) {
                if(candidate::where('name', '=',  $candidateData['name'])->exists()){
                    return;
                } else {
                $candidate = new candidateid;
                $candidate->name = $candidateData['name'];
                $candidate->candidate_id = $candidateData['id'];
                $candidate->office = $candidateData['office_sought'];
                $candidate->save();
                $candidateID = $candidate->candidate_id;
                candidate::saveCandidatebyID($candidateID);
                candidatefiling::getAllCandidateFiling($candidateID);
            }
        }
    }
}
