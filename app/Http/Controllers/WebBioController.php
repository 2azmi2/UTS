<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;

class WebBioController extends Controller
{
    public function index(){
        return view('List.biodata',[
            "title" => "Biodata",
            'data' => Bio::all()
        ]);
    }
}
