<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gsaauction extends Model
{
    protected $fillable =
        ['SaleNo', 'LotNo', 'AucStartDt', 'AucEndDt', 'ItemName', 'PropertyAddr1', 'PropertyAddr2', 'PropertyAddr3', 'PropertyCity', 'PropertyState', 'PropertyZip', 'AuctionStatus', 'SaleLocation', 'LocationOrg	', 'LocationStAddr', 'LocationCity', 'LocationST', 'LocationZip', 'BiddersCount', 'LotInfo', 'LotSequence', 'LotDescript', 'Instruction1', 'Instruction2', 'Instruction3', 'ContractOfficer', 'COEmail', 'COPhone', 'Reserve', 'AucIncrement', 'HighBidAmount', 'InactivityTime', 'AgencyCode', 'BureauCode', 'AgencyName', 'BureauName', 'ItemDescURL', 'ImageURL'];

    public static function getGSA()
    {
        $apiKey = '13PTvvyIlc6z5v9l1e9iPEgFORKFAmqowkaSOXfh';
      $gsadownload = "https://api.data.gov/gsa/auctions?api_key=$apiKey&format=JSON";
        $dataURL = "GSA_resources/GSAdata.json";

        $results = file_get_contents($dataURL);
dd($dataURL);
        $gsaData = $results['Results'];

//        dd(json_last_error());
        foreach ($gsaData as $gsaData) {
            $gsa = new gsaauction;
            $gsa->SaleNo = $gsaData['SaleNo'];
            $gsa->LotNo = $gsaData['LotNo'];
            $gsa->AucStartDt = $gsaData['AucStartDt'];
            $gsa->AucEndDt = $gsaData['AucEndDt'];
            $gsa->ItemName = $gsaData['ItemName'];
            $gsa->PropertyAddr1 = $gsaData['PropertyAddr1'];
            $gsa->PropertyAddr2 = $gsaData['PropertyAddr2'];
            $gsa->PropertyAddr3 = $gsaData['PropertyAddr3'];
            $gsa->PropertyCity = $gsaData['PropertyCity'];
            $gsa->PropertyState = $gsaData['PropertyState'];
            $gsa->PropertyZip = $gsaData['PropertyZip'];
            $gsa->AuctionStatus = $gsaData['AuctionStatus'];
//            $gsa->SaleLocation = $gsaData['SaleLocation'];
            $gsa->LocationOrg = $gsaData['LocationOrg'];
            $gsa->LocationStAddr = $gsaData['LocationStAddr'];
            $gsa->LocationCity = $gsaData['LocationCity'];
            $gsa->LocationST = $gsaData['LocationST'];
            $gsa->LocationZip = $gsaData['LocationZip'];
            $gsa->BiddersCount = $gsaData['BiddersCount'];
////            $gsa->LotInfo = $gsaData['LotInfo'];
//            $gsa->LotSequence = $gsaData['LotSequence'];
//            $gsa->LotDescript = $gsaData['LotDescript'];
            $gsa->Instruction1 = $gsaData['Instruction1'];
            $gsa->Instruction2 = $gsaData['Instruction2'];
            $gsa->Instruction3 = $gsaData['Instruction3'];
            $gsa->ContractOfficer = $gsaData['ContractOfficer'];
            $gsa->COEmail = $gsaData['COEmail'];
            $gsa->COPhone = $gsaData['COPhone'];
            $gsa->Reserve = $gsaData['Reserve'];
            $gsa->AucIncrement = $gsaData['AucIncrement'];
            $gsa->HighBidAmount = $gsaData['HighBidAmount'];
            $gsa->InactivityTime = $gsaData['InactivityTime'];
//            $gsa->AgencyCode = $gsaData['AgencyCode'];
//            $gsa->BureauCode = $gsaData['BureauCode'];
            $gsa->AgencyName = $gsaData['AgencyName'];
            $gsa->BureauName = $gsaData['BureauName'];
            $gsa->ItemDescURL = $gsaData['ItemDescURL'];
            $gsa->ImageURL = $gsaData['ImageURL'];

            $gsa->save();

        }
    }
}
