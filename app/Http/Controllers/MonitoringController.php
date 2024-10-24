<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    function index()
    {
        return view('monitoring');
    }
}
