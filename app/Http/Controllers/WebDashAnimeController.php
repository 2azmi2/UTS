<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

class WebDashAnimeController extends Controller
{
    public function index(){
        return view('Dashboard.dashanime',[
            "title" => "DashAnime",
            "data" => Anime::all()
        ]);
    }
    public function store(Request $request){
        $validateData=$request->validate([
            'judul'=>'required',
            'genre'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan'=>'required'
        ]);
        
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Anime::create([
            'judul' => $request->get('judul'),
            'genre' => $request->get('genre'),
            'image' => $imageName,
            'keterangan' => $request->get('keterangan')
        ]);
        $request->session()->flash('success','Data tersimpan');
        return redirect('/dashAnime');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'=>'required',
            'genre'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan'=>'required'
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Anime::find($id)->update([
            'judul' => $request->get('judul'),
            'genre' => $request->get('genre'),
            'image' => $imageName,
            'keterangan' => $request->get('keterangan')
        ]);
        $request->session()->flash('success','Data tersimpan');
        return redirect('/dashAnime');
    }
    public function destroy($id){
        Anime::find($id)->delete();
        return redirect()->route('dashAnime.index')
        -> with('success', 'Data Berhasil Dihapus');
    }
}
