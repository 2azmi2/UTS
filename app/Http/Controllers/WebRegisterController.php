<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class WebRegisterController extends Controller
{
    public function index(){
        return view('Login.register',[
            "title" => "Register"
        ]);
    }
    public function store(Request $request){
        $validateData=$request->validate([
            'nama'=>'required',
            'email'=>'required',
            'password'=>'required',
            'alamat'=>'required',
            'nomor'=>'required'
        ]);
        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);
        $request->session()->flash('success','Data tersimpan');
        return redirect('/register');
    }
}
