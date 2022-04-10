<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class WebEditMangaController extends Controller
{
    public function index($id){
        $data = Manga::find($id);
        return view('Dashboard.Edit.editmanga',[
            "title" => "EditManga",
        ],compact(['data']));
    }
}
