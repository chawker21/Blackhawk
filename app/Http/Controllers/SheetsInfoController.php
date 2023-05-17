<?php

namespace App\Http\Controllers;

use Google_Client;
use Google_Service_Sheets;
use Illuminate\Http\Request;
use Session;

class SheetsInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

/* Please read First!!

C:\wamp\www\C21 Help Files\googlesheetsAPIVendorchanges.txt

To Get Google Sheets API to work on local host,  get a valid token by bypassing verifypeer in guzzlehttp in vendor

guzzlehttp->guzzle->src->Client.PHP

line 159

'verify' => true,

change to...

'verify' => false,

This will give you a valid code

Something is also wrong in the way the vendor code is written in CurlFactory.php

guzzlehttp->guzzle->src->Handler->CurlFactory.php

line 67

 if (count($this->handles) >= $this->maxHandles) {

change to...

 if ($this->handles >= $this->maxHandles) {

This should allow google sheets to work with valid token.
*/

    public function client()
    {
        $client = new Google_Client();
        $client->setAuthConfig('../public/js/client_secret.json');
        $client->addScope("https://www.googleapis.com/auth/spreadsheets");
        $client->setAccessType('offline');
        $auth_url = $client->createAuthUrl();
        return redirect($auth_url);
    }

    public function googlelogin(Request $request)
    {
        $client = new Google_Client();
        $client->setAuthConfig('../public/js/client_secret.json');

        $authCode = $request->code;

        $creds = $client->fetchAccessTokenWithAuthCode($authCode);
        session(['sheets_token' => $creds]);
        Session::flash('success', 'You can now check Google Sheets Data');
        return redirect('/sheetapi');
    }

    public function googleapi()
    {
        $client = new Google_Client();
        $client->setAccessToken(session('sheets_token'));
        $range = 'A1:I';
        $service = new Google_Service_Sheets($client);
        $spreadsheetId = '1LItxIST0jrHQ6r7tDm0Hah6fsrOJCymRet6d6YzLEBE';
        // Videos = 1LItxIST0jrHQ6r7tDm0Hah6fsrOJCymRet6d6YzLEBE
        // Trump Tweets = 174Bnws8yWlwh7vMutX9DMMzf9Lky-21-nJJflayeCxk
        $response = $service->spreadsheets_values->get($spreadsheetId, $range, ['majorDimension' => 'ROWS']);

        return view('/sheets', compact('response'));
    }
}
