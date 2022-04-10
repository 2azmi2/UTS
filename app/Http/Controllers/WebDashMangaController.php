<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;

class WebDashMangaController extends Controller
{
    public function index(){
        return view('Dashboard.dashmanga',[
            "title" => "DashManga",
            "data" => Manga::all()
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

        Manga::create([
            'judul' => $request->get('judul'),
            'nama' => $request->get('nama'),
            'image' => $imageName,
            'keterangan' => $request->get('keterangan')
        ]);
        $request->session()->flash('success','Data tersimpan');
        return redirect('/dashManga');
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

        Manga::find($id)->update([
            'judul' => $request->get('judul'),
            'nama' => $request->get('nama'),
            'image' => $imageName,
            'keterangan' => $request->get('keterangan')
        ]);
        $request->session()->flash('success','Data tersimpan');
        return redirect('/dashManga');
    }
    public function destroy($id){
        Manga::find($id)->delete();
        return redirect()->route('dashManga.index')
        -> with('success', 'Data Berhasil Dihapus');
    }
}
