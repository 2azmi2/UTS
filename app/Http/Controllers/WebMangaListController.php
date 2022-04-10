<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class WebMangaListController extends Controller
{
    public function index(){
        return view('List.manga',[
            'title' => "Manga",
            'data' => Manga::all()
        ]);
    }
}
