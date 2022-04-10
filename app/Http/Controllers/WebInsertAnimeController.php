<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebInsertAnimeController extends Controller
{
    public function index(){
        return view('Dashboard.Insert.insertanime',[
            "title" => "Home"
        ]);
    }
}
