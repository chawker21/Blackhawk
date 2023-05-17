<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\library;
use App\Models\directory_list;
use App\Models\books;

class libraryController extends Controller
{
    public function index()
    {
        DB::table('libraries')->truncate();
        shell_exec("python H:\wamp\www\Blackhawk\public\app_resources\python\getlibrary.py 2>&1");

        // Define the $libraryTypes variable and assign it a value
        $libraryTypes = [
            [
                'title' => 'Photo Albums',
                'items' => library::where('category', '=', 'directory')->where('type', '=', 'img')->get()
            ],
            [
                'title' => 'Book Shelf',
                'items' => library::where('category', '=', 'directory')->where('type', '=', 'pdf')->get()
            ],
            [
                'title' => 'Sound Library',
                'items' => library::where('category', '=', 'directory')->where('type', '=', 'aud')->get()
            ],
            [
                'title' => 'Video Library',
                'items' => library::where('category', '=', 'directory')->where('type', '=', 'video')->get()
            ]
        ];

        // Pass the $libraryTypes variable to the view
        return view('/library/index', compact('libraryTypes'));
    }
    public function getLibrary(Request $request)
    {
        $library = library::where('title', '=', $request->library)->first();
        $images = library::where("type", '=', '.jpg')->orWhere("type", '=', '.png')->get();
        $books = library::where("type", "=", '.pdf')->get();
        $audio = library::where("type", '=', '.mp3')->get();
        $video = library::where("type", '=', '.mp4')->get();
        return view('/library/pages/Bookshelf', compact('library', 'images', 'books', 'audio', 'video'));
    }

    public function collection()
    {
        $collection = library::all();
        return response()->json($collection);
    }
}
