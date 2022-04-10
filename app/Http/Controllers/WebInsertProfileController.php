<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebInsertProfileController extends Controller
{
    public function index(){
        return view('Dashboard.Insert.insertprofile',[
            "title" => "Home"
        ]);
    }
}
