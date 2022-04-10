<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebDashboardController extends Controller
{
    public function index(){
        return view('Dashboard.dashboard',[
            "title" => "Dashboard"
        ]);
    }
}
