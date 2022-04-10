<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class WebAnimeListController extends Controller
{
    public function index(){
        return view('List.anime',[
            'title' => "Anime",
            'data' => Anime::all()
        ]);
    }
}
