<?php

namespace App\Http\Controllers;
use App\Artikel;
use App\Kategori;
use App\User;
use Auth;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {

       $artikels = Artikel::orderBy('created_at', 'DESC')->where('user_id', '=', Auth::user()->id)->paginate(10); 
       return view('artikel.artikel', ['artikels' => $artikels]);
    }

    public function create()
    {
        $users = User::all();
        $kategoris = Kategori::all(); 
        return view ('artikel.insertartikel', ['kategoris' => $kategoris, 'users' => $users]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'judulartikel' => 'required|max:100',
        'kategori_id' => 'required',
        'deskripsi' => 'required',
        ]);

        $artikels = new Artikel;
        $artikels->image= Input::get('image');
        If (Input::hasFile('gambar')) {
            $file=Input::file('gambar');
            $image =\Image::make(\Input::file('gambar'));
            $file->move('image', $file->getClientOriginalName());
            $path = public_path().'/image/';

        $image->save($path.$file->getClientOriginalName());
        $image->resize(367,346);
        $image->save($path.'thumb_'.$file->getClientOriginalName());

        $artikels->judulartikel = $request->judulartikel;
        $artikels->kategori_id = $request->kategori_id;
        $artikels->image = $file->getClientOriginalName();
        $artikels->deskripsi = $request->deskripsi;
        $artikels->slug = str_slug($request->judulartikel, '-');
        $artikels->user_id = Auth::user()->id;
    }
        $artikels->save();
        return redirect('app/artikel')->with('messageinsert','Artikel sudah berhasil ditambahkan');
    

    }

    public function show($judulartikel)
    {
        $artikel = Artikel::where('slug', $judulartikel)->first();
        if(!$artikel){
            abort(503);
        }
        return view('artikel.single')->with('artikel', $artikel);

    }

    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $kategoris = Kategori::all();
        return view('artikel.editartikel', ['kategoris' => $kategoris, 'artikel' => $artikel]);
        
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'judulartikel' => 'required',
        'kategori_id' => 'required',
        'deskripsi' => 'required',
        ]);

        $artikels = Artikel::find($id);
        $artikels->judulartikel = $request->judulartikel;
        $artikels->kategori_id = $request->kategori_id;
        $artikels->deskripsi = $request->deskripsi;
        $artikels->save();
        return redirect('app/artikel')->with('messageupdate','Artikel sudah berhasil diupdate');
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id)->delete();
        return redirect('app/artikel')->with('messagedelete','Artikel sudah berhasil dihapus');
    }

}
