<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class WebEditAnimeController extends Controller
{
    public function index($id){
        $data = Anime::find($id);
        return view('Dashboard.Edit.editanime',[
            "title" => "EditAnime",
        ],compact(['data']));
    }
}
