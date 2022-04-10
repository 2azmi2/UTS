<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebInsertMangaController extends Controller
{
    public function index(){
        return view('Dashboard.Insert.insertmanga',[
            "title" => "Home"
        ]);
    }
}
