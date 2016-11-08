<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Info;

class InfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('rule:admin');
    }

    public function index()
    {
        $infos = Info::all();
        return view('info.info', ['infos' => $infos]);
    }

    public function create()
    {
        $infos = Info::all();
        return view('info.insertinfo', ['infos' => $infos]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            ]);

        $info = new info;
        $info->alamat = $request->alamat;
        $info->telp = $request->telp;
        $info->email = $request->email;
        $info->save();
        return redirect('app/info');
    }


    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $info = Info::find($id);
        return view('info.editinfo', ['info' => $info]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            ]);

        $info = Info::find($id);
        $info->alamat = $request->alamat;
        $info->telp = $request->telp;
        $info->email = $request->email;
        $info->save();
        return redirect('app/info');
    }


    public function destroy($id)
    {
        $infos = Info::find($id);
        $infos->delete();
        return redirect('app/info');
    }
}
