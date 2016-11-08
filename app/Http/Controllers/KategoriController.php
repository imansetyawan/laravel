<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategori;
use App\IndukKategori;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('rule:admin');
    }

    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.kategori', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $indukkategori = IndukKategori::all(); 
        return view ('kategori.insertkategori', ['indukkategori' => $indukkategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'namakategori' => 'required',
        'indukkategori_id' => 'required',
        ]);

        $kategori = new Kategori;
        $kategori->namakategori = $request->namakategori;
        $kategori->indukkategori_id = $request->indukkategori_id;
        $kategori->slug = str_slug($request->namakategori, '-');
        $kategori->save();
        return redirect('app/kategori')->with('messageinsert','Kategori sudah berhasil ditambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $indukkategori = IndukKategori::all(); 
        $kategori = Kategori::find($id);
        return view('kategori.editkategori', ['kategori' => $kategori, 'indukkategori' => $indukkategori]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'namakategori' => 'required',
        'indukkategori_id' => 'required',
        ]);

        $kategori = Kategori::find($id);

        $kategori->namakategori = $request->namakategori;
        $kategori->indukkategori_id = $request->indukkategori_id;
        $kategori->slug = str_slug($request->namakategori, '-');
        $kategori->save();
        return redirect('app/kategori')->with('messageupdate','Kategori sudah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('app/kategori')->with('messagedelete','Kategori sudah berhasil dihapus');
    }
}
