<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\IndukKategori;

class IndukController extends Controller
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
        $indukkategoris = IndukKategori::all();
        return view('indukkategori.indukkategori', ['indukkategoris' => $indukkategoris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indukkategori.insertinduk');
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
        'nama_induk_kategori' => 'required',
        ]);

        $indukkategori = new IndukKategori;
        $indukkategori->nama_induk_kategori = $request->nama_induk_kategori;
        $indukkategori->save();
        return redirect('app/indukkategori')->with('messageinsert','Induk Kategori sudah berhasil ditambahkan');
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
        $indukkategori = IndukKategori::find($id); 
        return view('indukkategori.editinduk', ['indukkategori' => $indukkategori]) ;
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
        'nama_induk_kategori' => 'required',
        ]);

        $indukkategori = IndukKategori::find($id);
        $indukkategori->nama_induk_kategori = $request->nama_induk_kategori;
        $indukkategori->save();
        return redirect('app/indukkategori')->with('messageupdate','Induk Kategori sudah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $indukkategori = IndukKategori::find($id);
        $indukkategori->delete();
        return redirect('app/indukkategori')->with('messagedelete','Induk Kategori sudah berhasil dihapus');
    }
}
