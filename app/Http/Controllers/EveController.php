<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eve;
class EveController extends Controller
{
    public function client()
    {
        $client = new Eve_Client();
        $client->setAuthConfig('../public/js/eve_client_secret.json');
        $client->setRedirectUri('http://localhost:8000/eve/');
        //$client->addScope('https://www.googleapis.com/auth/youtube.readonly');
        $client->setAccessType('offline');
        $credentialsPath = '../public/js/ytcred';
        if (file_exists($credentialsPath)) {
            $accessToken = file_get_contents($credentialsPath);
        } else {
            // Request authorization from the user.
            $authUrl = $client->createAuthUrl();
            printf("Open the following link in your browser:\n%s\n", $authUrl);
            print 'Enter verification code: ';
        }
    }

    public function googlelogin(Request $request)
    {
        $client = new Google_Client();
        $client->setAuthConfig('../public/js/client_secret_yt.json');
        $authCode = '4/fgBS0Er4x1fSNfuSqoWPtv-wOZl_dL89DgalcOpgBV3Sx7js0-rtog0';
        session(['yt_token' => $authCode]);
        Session::flash('success', 'You can now check Google Sheets Data');
        return $client;
    }

    public function googleapi()
    {
        $client = new Google_Client();
        $service = new Google_Service_YouTube($client);
        $params = array_filter($params);
        $response = $service->channels->listChannels(
            $part,
            $params
        );

        $description = sprintf(
            'This channel\'s ID is %s. Its title is %s, and it has %s views.',
            $response['items'][0]['id'],
            $response['items'][0]['snippet']['title'],
            $response['items'][0]['statistics']['viewCount']);
        print $description . "\n";
    }

    public function index(){
        $eve = Eve::orderBy('id', 'asc')->get();

        return view('/eve/eve', compact('eve'));
    }
    public function Callback(){


        return view('/eve/Callback');
    }
}
