<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use File;
use getID3;
use Illuminate\Support\Facades\Input;
use Smalot\PdfParser\Parser as Parser;
use App\civil;

class sync extends Model
{





        public function scopecivilfiles()
    {
        DB::table('civil')->truncate();


//        $born =  File::allFiles("/var/www/html/public/rockystone/born");
        $civil =  File::allFiles("C:/wamp/www/Cards/public/Cards");
        $parser = new Parser();

        for($i = 0; $i < count($civil); $i++) {
            if ($jpgmime = File::mimeType($civil[$i]) == 'text/plain' ) {
                $text = fopen($civil[$i], "r") or die("unable to open file!");
            }
            if ($civilmime = File::mimeType($civil[$i]) == 'image/jpg') {
                $fname = basename($civil[$i], '.jpg');
                $civil[$i] = $parser->parseFile($civil[$i]);
                $meta[$i] = $civil[$i]->getDetails();

                $author = $meta[$i]['Author'];
                $keywords = $meta[$i]['Keywords'];
                $subject = $meta[$i]['Subject'];
                $pages = $meta[$i]['Pages'];
                $title = $meta[$i]['Title'];
                $year = $meta[$i]['year'];

                $civil[$i] = new born;
                $civil[$i]->fname = $fname;
                $civil[$i]->author = $author;
                $civil[$i]->keywords = $keywords;
                $civil[$i]->subject = $subject;
                $civil[$i]->pages = $pages;
                $civil[$i]->title = $title;
                $civil[$i]->year = $year;
                $civil[$i]->fileformat = 'pdf';
                $civil[$i]->save();

            }
        }
    }
    public function scopepdffiles()
    {
        DB::table('pdfs')->truncate();
//        $pdf =  File::allFiles("/var/www/html/public/rockystone/pdf");
        $pdf =  File::allFiles("C:/wamp/www/Stone/public/rockystone/pdf");
        $parser = new Parser();
        for($i = 0; $i < count($pdf); $i++) {
            if ($pdfmime = File::mimeType($pdf[$i]) == 'text/plain' ) {
                $text = fopen($pdf[$i], "r") or die("unable to open file!");
            }
                if ($pdfmime = File::mimeType($pdf[$i]) == 'application/pdf') {
                    $fname = basename($pdf[$i], '.pdf');
                    $pdf[$i] = $parser->parseFile($pdf[$i]);
                    $meta[$i] = $pdf[$i]->getDetails();
                    $author = $meta[$i]['Author'];
                    $keywords = $meta[$i]['Keywords'];
                    $subject = $meta[$i]['Subject'];
                    $pages = $meta[$i]['Pages'];
                    $title = $meta[$i]['Title'];
                    $year = $meta[$i]['year'];
                    $pdf[$i] = new pdf;
                    $pdf[$i]->fname = $fname;
                    $pdf[$i]->author = $author;
                    $pdf[$i]->keywords = $keywords;
                    $pdf[$i]->subject = $subject;
                    $pdf[$i]->pages = $pages;
                    $pdf[$i]->title = $title;
                    $pdf[$i]->year = $year;
                    $pdf[$i]->fileformat = 'pdf';
                    $pdf[$i]->save();
            }
        }
    }
    public function scopecivilidfiles()
    {
        DB::table('civil')->truncate();
//        $pdf =  File::allFiles("/var/www/html/public/rockystone/pdf");
//        $civ = File::allFiles("C:/wamp/www/Cards/public/Civil/Confederate");
        $civ = File::allFiles("C:/wamp/www/Cards/public/Cards/");

        $getID3 = new getID3;

        for ($i = 0; $i < count($civ); $i++) {
            $civil[$i] = $getID3->analyze($civ[$i]);

            if ($civmime = File::mimeType($civ[$i]) == 'image/jpeg') {
                $fname = basename($civ[$i], '.jpg');
                $filesize = $civil[$i]['filesize'];

                $civil[$i] = $getID3->analyze($civ[$i]);
                $Description = $civil[$i]['xmp']['dc']['description'][0];
                $Title = $civil[$i]['xmp']['dc']['title'][0];
//dd($civil[$i]);
                $subject = $civil[$i]['xmp']['dc']['subject'][0];
                $sub = $civil[$i]['xmp']['dc']['subject'][1];
                $Side = $civil[$i]['xmp']['dc']['subject'][3];
                $Set = $civil[$i]['xmp']['dc']['subject'][5];
                $card = $civil[$i]['xmp']['dc']['subject'][2];
                $res_x = $civil[$i]['video']['resolution_x'];
                $res_y = $civil[$i]['video']['resolution_y'];
                if($res_x > $res_y) {
                    $view = "horizontal";
                    $ratio = $res_y / $res_x;
                } else {
                    $view = "vertical";
                    $ratio = $res_x / $res_y;
                }

                $Year = $civil[$i]['xmp']['dc']['subject'][4];
                $rights = $civil[$i]['xmp']['dc']['rights'][0];
//                dd($civil[$i]['xmp']['dc']['subject'][3]);
$civil[$i] = new civil;

                $civil[$i]->Description = $Description;
                $civil[$i]->subject = $subject;
                $civil[$i]->sub = $sub;
                $civil[$i]->Side = $Side;
                $civil[$i]->card = $card;
                $civil[$i]->Set = $Set;
                $civil[$i]->res_x = $res_x;
                $civil[$i]->res_y = $res_y;
                $civil[$i]->ratio = $ratio;
                $civil[$i]->view = $view;
                $civil[$i]->fname = $fname;
                $civil[$i]->filesize = $filesize;
                $civil[$i]->Title = $Title;
                $civil[$i]->Year = $Year;
                $civil[$i]->rights = $rights;


                $civil[$i]->save();
            }
        }
    }
    public function scopechebfiles()
    {
        DB::table('chebs')->truncate();


//        $born =  File::allFiles("/var/www/html/public/rockystone/born");
        $cheb =  File::allFiles("C:/wamp/www/Stone/public/rockystone/cheb");
        $parser = new Parser();
//dd($pdf);
        for($i = 0; $i < count($cheb); $i++) {
            if ($pdfmime = File::mimeType($cheb[$i]) == 'text/plain' ) {
                $text = fopen($cheb[$i], "r") or die("unable to open file!");
            }
            if ($chebmime = File::mimeType($cheb[$i]) == 'application/pdf') {
                $fname = basename($cheb[$i], '.pdf');
                $cheb[$i] = $parser->parseFile($cheb[$i]);
                $meta[$i] = $cheb[$i]->getDetails();
                $author = $meta[$i]['Author'];
                $keywords = $meta[$i]['Keywords'];
                $subject = $meta[$i]['Subject'];
                $pages = $meta[$i]['Pages'];
                $title = $meta[$i]['Title'];
//                $year = $meta[$i]['year'];
                $cheb[$i] = new cheb;
                $cheb[$i]->fname = $fname;
                $cheb[$i]->author = $author;
                $cheb[$i]->keywords = $keywords;
                $cheb[$i]->subject = $subject;
                $cheb[$i]->pages = $pages;
                $cheb[$i]->title = $title;
//                $cheb[$i]->year = $year;
                $cheb[$i]->fileformat = 'pdf';
                $cheb[$i]->save();

            }
        }
    }

    public function scopemp4files()
    {

        DB::table('borns')->truncate();



        $born =  File::allFiles(env("FILEPATH", "C:/wamp/www/stone/public/rockystone"));
//        dd($born);
        $getID3 = new getID3;
        for($i = 0; $i < count($born); $i++) {
//            dd($bornmime = File::mimeType($born[$i]));
            if($bornmime = File::mimeType($born[$i]) == 'video/mp4') {
                $fileUrl = $born[$i]->getFilename();
                $born[$i] = $getID3->analyze($born[$i]);
//            dd($born[$i]);
                $filename = $born[$i]['tags']['quicktime']['title'][0];
                $track = $born[$i]['tags']['quicktime']['track_number'][0];
                $artist = $born[$i]['tags']['quicktime']['artist'][0];
                $album = $born[$i]['tags']['quicktime']['album'][0];
                $lyrics = $born[$i]['tags']['quicktime']['lyrics'][0];
                $playtime_string = $born[$i]['playtime_string'];
                $fileformat = $born[$i]['fileformat'];
                $filesize = $born[$i]['filesize'];

                $born[$i] = new born;
                $born[$i]->name = $filename;
                $born[$i]->track = $track;
                $born[$i]->artist = $artist;
                $born[$i]->album = $album;
                $born[$i]->size = $filesize;
                $born[$i]->playtime_string = $playtime_string;
                $born[$i]->fileformat = $fileformat;
                $born[$i]->lyrics = $lyrics;
                $born[$i]->fileUrl = $fileUrl;

                $born[$i]->save();
            }

        }
    }


}
