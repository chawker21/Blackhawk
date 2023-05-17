<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function choosePage()
    {
        $dir = public_path('/EQ_resources/TextFiles');
        $pages = scandir($dir);
        return view('/EQemu/TextPages/ChoosePage')->with('pages', $pages);
    }

    public function text(Request $request)
    {

        $path = '/EQ_resources/TextFiles/' . $request->page;
        $title = preg_replace('/\\.[^.\\s]{3,4}$/', '', $request->page);
        $data = file_get_contents($path);
        return view('/EQemu/TextPages/Text', compact('data', 'title'));
    }
}
