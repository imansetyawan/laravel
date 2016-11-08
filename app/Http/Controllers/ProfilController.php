<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\User;
use Auth;
use App\File;
use Image;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::find(Auth::user()->id);
       return view('profil.profil', ['users' => $users]);        
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'namalengkap' => 'required',
        'nomorhp' => 'required',
        'angkatan' => 'required',
        'ttl' => 'required',
        'alamatasli' => 'required',
        'alamatmalang' => 'required',
        'deskripsi' => 'required',
        ]);

        $users = User::find($id);
        $users->image= Input::get('image');
        If (Input::hasFile('gambar')) {
            $file=Input::file('gambar');
            $file->move('image', $file->getClientOriginalName());
            
        $users->name = $request->name;
        $users->namalengkap = $request->namalengkap;
        $users->nomorhp = $request->nomorhp;
        $users->angkatan = $request->angkatan;
        $users->ttl = $request->ttl;
        $users->alamatasli = $request->alamatasli;
        $users->alamatmalang = $request->alamatmalang;
        $users->deskripsi = $request->deskripsi;
        $users->image = $file->getClientOriginalName();
    }
        $users->save();
        return redirect('user/profile');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $users = User::find($id);
        return view('profil.editprofile', ['users' => $users]);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'name' => 'required',
        'namalengkap' => 'required',
        'nomorhp' => 'required',
        'angkatan' => 'required',
        'ttl' => 'required',
        'alamatasli' => 'required',
        'alamatmalang' => 'required',
        'deskripsi' => 'required',
        ]);
        $input = $request->all();
        
        $users = User::find($id);
        if($request->hasFile('gambar')){
            $avatar = $request->file('gambar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('image/' . $filename) );
            $users->avatar = $filename;
        }

        $users->name = $request->name;
        $users->namalengkap = $request->namalengkap;
        $users->nomorhp = $request->nomorhp;
        $users->angkatan = $request->angkatan;
        $users->ttl = $request->ttl;
        $users->alamatasli = $request->alamatasli;
        $users->alamatmalang = $request->alamatmalang;
        $users->deskripsi = $request->deskripsi;
    
        $users->save();
        return redirect('app/user/profile');
    }

    public function destroy($id)
    {
        //
    }

}
