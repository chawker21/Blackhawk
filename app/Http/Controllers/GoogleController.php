<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
use Google_Client;
use Google_Service_Sheets;
use Session;
class GoogleController extends Controller

// Google Calendar API

//https://github.com/spatie/laravel-google-calendar
{
    public function calendar(){
//todo calendar currently doesnt work
       $events = Event::get();
//        dd($events);
       return view('/calendar', compact ('events'));
    }

    public function createEvent(){
        return view('/createEvent');
    }

    public function saveEvent(Request $request){
        $event = new Event;
        $event->name = $request->eventname;
        $event->startDateTime = Carbon::now();
        $event->endDateTime = Carbon::now()->addHour();

        $event->save();
    }


// Google Sheets API

//https://github.com/asimlqt/php-google-spreadsheet-client

//https://www.twilio.com/blog/2017/03/google-spreadsheets-and-php.html

public function getClient()
{
    putenv('GOOGLE_APPLICATION_CREDENTIALS=' . public_path('storage/client_secret.json'));
    $client = new Google_Client();
    $client->setAuthConfig(public_path('storage/client_secret.json'));
    $client->addScope("https://www.googleapis.com/auth/spreadsheets");
    $client->setApprovalPrompt('force');
    $auth_url = $client->createAuthUrl();
    return redirect($auth_url);

}

public function googlelogin(Request $request)
{
    $client = new Google_Client();
    $client->setAuthConfig(public_path('storage/client_secret.json'));
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
//    $spreadsheetId = '1TYAWybCY5hqieC4CxjRehvzzRBNWjKMKmLoiMqyooEc'; //*Photos
    $spreadsheetId = '1o-qhWrr-yPR5ZIq1RZqiMiQdRcyoUxBufW1eDSHvuyc'; //*Videos
//    $spreadsheetId = '1CmFODNJ7n1FuO6Nm3vY3IaQ1iIGBeY4yzWPl4iNx1B0';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);


    return view('/sheets', compact('response'));

}
}



