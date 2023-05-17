<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use File;
use getID3;
class twilight extends Model
{
    protected $table = ('twilight');

    public function scopeTwilightFiles()
    {
        DB::table('twilight')->truncate();
//        $pdf =  File::allFiles("/var/www/html/public/rockystone/pdf");
//        $civ = File::allFiles("C:/wamp/www/Cards/public/Civil/Confederate");




        for ($i = 0; $i < 5; $i++) {
            $episodes = File::allFiles("C:/wamp/www/chawker21.blue/public/video_resources/videos");
            $getID3 = new getID3;
            $episode[$i] = $getID3->analyze($episodes[$i]);
//dd($getID3);
                $fname = basename($episode[$i]['filename']);
                $filesize = $episode[$i]['filesize'];
                $fileformat = $episode[$i]['fileformat'];
//dd($episode[$i]['tags']['quicktime']['title'][0]);

//                $title = $episode[$i]['tags']['quicktime']['title'][0];

                $mimetype =$episode[$i]['mime_type'];
                $encoding = $episode[$i]['encoding'];
                $playtime = $episode[$i]['playtime_string'];

            $twilight = new twilight;
                $twilight->fname = $fname;
                $twilight->filesize = $filesize;
                $twilight->fileformat = $fileformat;
//                $twilight->title = $title;

                $twilight->mimetype = $mimetype;
                $twilight->encoding = $encoding;
                $twilight->playtime = $playtime;
                $twilight->save();

return view('/Twilight_Zone/index');
        }
    }
}
