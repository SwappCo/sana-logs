<?php

namespace swappco\SanaLogs\Http\Controllers;

use Illuminate\Support\Facades\Log;
use SwappCo\SanaLogs\SanaLogs;

class SanaLogsController extends BaseController
{
    public function index(){
        return view('x::SanaLogs');
    }
    public function home(){
        return view('x::home')->with([
            'message'=>"salam"
        ]);
    }

}
