<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stm32;
class STM32Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function f446re() {
//        $stm32 = stm32::all();
        return view('/stm32/f446re');

    }
    public function f446re_links() {
//        $stm32 = stm32::all();
        return view('/stm32/f446re_links');

    }
    public function f446re_GPIO() {
//        $stm32 = stm32::all();
        return view('/stm32/f446re_GPIO');

    }
}
