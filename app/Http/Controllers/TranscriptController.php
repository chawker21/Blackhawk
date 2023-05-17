<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Response;
use App\Models\transcript;
use App\Models\ytid;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use \RecursiveIteratorIterator;
use \RecursiveArrayIterator;
class TranscriptController extends Controller
{
    public function yt_video_id(Request $request)
    {
        if (transcript::where('video_id',  '=', $request->data)->exists()) {
            return; } else {

            $ytid = new ytid;
            $ytid->video_id = $request->data;
            $videoTitle = $request->videoTitle;
            $channelId = $request->channelId;
            $channelTitle = $request->channelTitle;
            $description = $request->description;
            $playlistId = $request->playlistId;
            $publishedAt = $request->publishedAt;
            $title = $request->title;
            $iframe = $request->iframe;
            $data = $request->data;
            $this->getTranscript($data, $videoTitle, $channelId, $channelTitle, $description, $playlistId, $publishedAt, $title, $iframe);
            $ytid->save();
        }
    }
    public function getTranscript($data, $videoTitle, $channelId, $channelTitle, $description, $playlistId, $publishedAt, $title, $iframe)
    {
        $video_id = $data;
        exec("youtube_transcript_api  --json $video_id transcripts.json " ,$output, $return_var);
        $process = Collection::make($output);
        $video_id = str_replace(['"',"'",'[','{'], "", strstr($process, ':', true));
        $t = json_encode($process);
        $transcript = new transcript;
        $transcript->video_id = $video_id;
        $transcript -> 	videoTitle = $videoTitle;
        $transcript -> 	channelId = $channelId;
        $transcript -> 	channelTitle = $channelTitle;
        $transcript -> 	description = $description;
        $transcript -> 	playlistId = $playlistId;
        $transcript -> 	publishedAt = $publishedAt;
        $transcript -> 	title = $title;
        $transcript -> 	iframe = $iframe;

        $transcript->transcript = $t;
        $transcript->save();
//       return view('getTranscript', compact('process'));
    }
    public function like_yt_video($video_id){

    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $result = transcript::where('transcript', 'like', "%$query%")->orWhere('description', 'like', "%$query%")->first();
        $vid = stripslashes($result->video_id);

        foreach (json_decode($result->transcript) as $json => $transcript) ;

        $transcript = preg_replace('/"([^"]+)"\s*:\s*/', '$1:', $transcript);
        $words = ["text", 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, "start", "duration", $vid, '{', '}', ',', ':', '[', '"', '.'];
        $tstr = str_replace($words, '', $transcript);
        $tarr = collect(explode("text", $transcript));
//        dd($query);
     foreach($tarr as $key => $value){

if (strpos($value, $query) !== false) {


              $res = $value;
    $int = preg_split('/start:/', $res);
    $start = mb_substr($int[1], 0,7);
             }
         }
        return view('/YT/view_transcript', ['result' => $result , 'query' => $query, 'tarr' => $tarr, 'tstr' =>$tstr, 'res' => $res, 'start' => $start]);
    }


    public function yt(){
        return view('/YT/yt');
    }
}
