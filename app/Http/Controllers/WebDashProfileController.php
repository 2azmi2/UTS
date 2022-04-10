<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bio;
use Illuminate\Support\Facades\Storage;


class WebDashProfileController extends Controller
{
    public function index(){
        return view('Dashboard.dashprofile',[
            "title" => "DashProfile",
            "data" => Bio::all()
        ]);
    }
    public function store(Request $request){
        $validateData=$request->validate([
            'judul'=>'required',
            'nama'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan'=>'required'
        ]);
        
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Bio::create([
            'judul' => $request->get('judul'),
            'nama' => $request->get('nama'),
            'image' => $imageName,
            'keterangan' => $request->get('keterangan')
        ]);
        $request->session()->flash('success','Data tersimpan');
        return redirect('/dashProfile');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'=>'required',
            'nama'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan'=>'required'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Bio::find($id)->update([
            'judul' => $request->get('judul'),
            'nama' => $request->get('nama'),
            'image' => $imageName,
            'keterangan' => $request->get('keterangan')
        ]);
        $request->session()->flash('success','Data tersimpan');
        return redirect('/dashProfile');
    }
    public function destroy($id){
        Bio::find($id)->delete();
        return redirect()->route('dashProfile.index')
        -> with('success', 'Data Berhasil Dihapus');
    }
}
