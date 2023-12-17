<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $date = new Carbon();
        $dt = $date->createFromDate();
        $dt->startOfMonth(); //今月の最初の日
        $dt->timezone = 'Asia/Tokyo'; //日本時刻で表示

        //今月は何日まであるか
        $daysInMonth = $dt->daysInMonth;
        return view('home', ['dt' => $dt, 'daysInMonth' => $daysInMonth]);
    }
}
