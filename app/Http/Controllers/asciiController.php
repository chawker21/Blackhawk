<?php

namespace App\Http\Controllers;
use App\Models\Models\Spatie\Html\Elements\Div;

use App\Models\Spatie\Html\Html;
use Session;
use Illuminate\Http\Request;
use App\Models\ascii;
use App\Models\utf;
use Illuminate\Support\Str;


class asciiController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function index(){


        return view('/Binary/index');
    }


    public function asciicode(){
    $asciis = ascii::all();

    return view('/Binary/ascii-code', compact( 'asciis'));
}
    public function unicode()
    {
        $unicodes = utf::where('Character', '!=', "")->where('Description', '!=', "")->orderBy('Unicode', 'ASC')->paginate(2000);

//        $unicodes = utf::where('Character', '!=', "")->orderByRaw('LENGTH(Unicode)', 'ASC')->orderBy('Unicode', 'ASC')->paginate(2000);


    return view('/Binary/unicode', compact('unicodes'));
    }
    public function utfcode(){
        $utfs = utf::where('Character', '!=', "")->orderBy('Unicode', 'ASC')->paginate(200);

        return view('/Binary/utf-8-code', compact( 'utfs'));
    }
    public function sandbox(){
        $utfs = utf::where('id', '>=', 157795)->where('id', '<=', 157804)->get();
        $clocks = utf::where('id', '>=', 158370)->where('id', '<=', 157393)->get();


        return view('/Binary/utf-8-sandbox', compact( 'utfs', 'clocks'));
    }
    public function uploadFile(Request $request){
        if($request->input('submit') !=null ) {
            $file = $request->file('file');

            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            $valid_extension = array('csv');
            $maxFileSize = 2097152;

            if (in_array(strtolower($extension), $valid_extension)) {
                if ($fileSize <= $maxFileSize) {
                    $location = 'uploads';
                    $file->move($location, $filename);
                    $filepath = public_path($location . "/" . $filename);
                    $file = fopen($filepath, "r");
                    $importData_arr = array();
                    $i = 0;

                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                        $num = count($filedata);

                        if ($i == 0) {
                            $i++;
                            continue;
                        }
                        for ($c = 0; $c < $num; $c++) {
                            $importData_arr[$i][] = $filedata [$c];
                        }
                        $i++;
                    }
                    fclose($file);

                    foreach ($importData_arr as $importData) {
                        $insertData = array(
                            "DEC" => $importData[0],
                            "OCT" => $importData[1],
                            "HEX" => $importData[2],
                            "BIN" => $importData[3],
                            "Symbol" =>  htmlspecialchars($importData[4]) ,
                            "HTML_Number" => $importData[5],
                            "HTML_Name"=> htmlspecialchars($importData[6],ENT_COMPAT,1252,TRUE),
                            "Description" => $importData[7]);

//                                "HTML_Name" => $importData[7]);


                        ascii::insertData($insertData);
                    }
                    session::flash('message', 'Import Successful.');
                } else {
                    Session::flash('message', 'File too Large. File Must be less than 2MB.');
                }
            } else {
                Session::flash('message', 'Invalid File Extension.');
            }
        }
        return redirect()->action('asciiController@asciicode');

                        }
    public function uploadutf(Request $request){
        ini_set('max_execution_time', 900);
        if($request->input('submit') !=null ) {
            $file = $request->file('file');

            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();


            $valid_extension = array('csv');
            $maxFileSize = 2097152;

            if (in_array(strtolower($extension), $valid_extension)) {
                if ($fileSize <= $maxFileSize) {
                    $location = 'uploads';
                    $file->move($location, $filename);
                    $filepath = public_path($location . "/" . $filename);
                    $file = fopen($filepath, "r");



                    $importData_arr = array();
                    $i = 0;

                    while (($filedata = fgetcsv($file, 1030, ",")) !== FALSE) {
                        $num = count($filedata);

                        if ($i == 0) {
                            $i++;
                            continue;
                        }

                        for ($c = 0; $c < $num; $c++) {
                            $importData_arr[$i][] = $filedata [$c];
                        }
                        $i++;
                    }
                    fclose($file);

                    foreach ($importData_arr as $importData) {
                        $insertData = array(
                            "Unicode" => $importData[0],
                            "Character" => htmlspecialchars($importData[1]),
                            "utf_Binary" => $importData[2],
                            "HTML_Number" => $importData[3],
                            "HTML_Name"=> htmlspecialchars($importData[4]),
                            "Description" => $importData[5]);


//


                        utf::insertData($insertData);
                    }
                    session::flash('message', 'Import Successful.');
                } else {
                    Session::flash('message', 'File too Large. File Must be less than 2MB.');
                }
            } else {
                Session::flash('message', 'Invalid File Extension.');
            }
        }
        return redirect()->action('asciiController@utfcode');

    }
}
