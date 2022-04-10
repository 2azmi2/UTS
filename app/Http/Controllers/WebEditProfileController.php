<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;

class WebEditProfileController extends Controller
{
    public function index($id){
        $data = Bio::find($id);
        return view('Dashboard.Edit.editprofile',[
            "title" => "EditProfile",
        ],compact(['data']));
    }
}
