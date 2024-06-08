<?php

namespace App\Http\Controllers\Settings\common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonSettings extends Controller
{
    //
    public function index()
    {
        //
        return view('DashPages.CommonSettings.CSindex');
    }
}
