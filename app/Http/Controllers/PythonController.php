<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\representative;
use DB;
use App\Models\fip;
use App\Models\website_link;
use App\Models\video;
class PythonController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function shooter()
    {


        shell_exec("python H:\wamp\www\Blackhawk\public\app_resources\python\main.py 2>&1");
        return redirect()->back();


    }
    public function getCongressMembers()
    {
        $arg1 = "hello";
        shell_exec("python CongMem.py $arg1");
        return redirect()->action('PythonController@csvToArray');
    }

    public function csvToArray()
    {
        if (($handle = fopen('Representatives2.csv', 'r')) !== FALSE) {
            DB::table('representatives')->truncate();
            while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                representative::saverepresentativeinfo($data);
            }
            fclose($handle);
        }
        return redirect()->action('PythonController@membersofcongress');
    }

    public function getFIPS()
    {
        /* Requires legislator/FIPS.csv in the public folder
        This is a file with the abbreviated states and corresponding fips number
        */
        if (($handle = fopen('legislator/FIPS.csv', 'r')) !== FALSE) {
            DB::table('fips')->truncate();
            while (($data = fgetcsv($handle, 100, ',')) !== FALSE) {
                fip::savefipinfo($data);
            }
            fclose($handle);
        }
    }

// returns the menu names and button names in JSON format for unity app.
    public function membersofcongress()
    {
        $representative = representative::all();
        return view('/membersofcongress', compact('representative'));
    }

    public function getyourrep()
    {
        return view('/getyourrep');
    }

    public function getrep(Request $request)
    {

        $state = $request->state;
        $geoid = fip::where('fip', '=', $state)->first();
        $district = $request->district;
        $representative = representative::where('state', '=', $geoid->long)->Where('district', '=', $district)->first();
        return view('/yourrepresentative', compact('representative'));
    }

    public function myrep(Request $request)
    {
        $geoid = $request->geoid;
        return view('/myrep', compact('geoid'));
    }

    public function blue_on()
    {
//   shell_exec("C:\Users\Administrator.AD\AppData\local\Programs\Python\Python37-32\python C21-sonoff-blue_ON.py");
        shell_exec("python C21-sonoff-blue_ON.py  2>&1");
        return back();
    }

    public function blue_off()
    {
//        shell_exec("C:\Users\Administrator.AD\AppData\local\Programs\Python\Python37-32\python C21-sonoff-blue_OFF.py");
        shell_exec("python C21-sonoff-blue_OFF.py  2>&1");
        return back();
    }


    public function geturl()
    {
        return view('/python/geturl');

    }
    public function returntext(Request $request)
    {
        $www = $request->www;
        $file = $request->file;

        shell_exec("python  python_resources/extract_text_from_html_soup.py $www $file");
        return back();
    }
    public function getlinks()
    {
        return view('/python/getlinks');

    }
    public function returnlinks(Request $request)
    {
        $www = $request->www;
        $file = $request->file;

        shell_exec("python python_resources/main.py $file $www");
        $this->savelinks($file);
        return Redirect::action('PythonController@showlinks');
    }
    public function getsavefile()
{
    return view('/python/savelinks');

}
    public function savelinks($file)
    {
        website_link::truncate();


        shell_exec("python python_resources/save_links.py $file");
        return view('/python/showlinks');
    }
    public function showlinks()
    {
        $links = website_link::all();
        return view('/python/showlinks', compact('links'));
    }

    public function getTwilight()
    {
        return view('/python/getTwilight');
    }

    public function returnTwilight(Request $request)
    {
        $dir = video::distinct()->get(['directory']);
        $episodes = video::where('id', '<', 0)->get();
        $database = $request->database;
        $path = $request->path;
        $table_name = $request->table_name;
        shell_exec("python  python_resources/rename_ins_dir_file_to_tbl.py $database $path $table_name");
        return view('/Twilight_Zone/index', compact('dir', 'episodes'));
    }
}
