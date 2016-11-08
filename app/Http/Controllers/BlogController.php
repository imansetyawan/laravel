<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\User;
use App\Message;
use App\Info;
use App\Subscriber;
use App\Http\Requests;
use Hash, Mail;
use Input;
use Image;

class BlogController extends Controller
{
    public function __construct()
    {
        // parent::__construct(); // function ini juga menjalankan cunstructor dari parentnya.
        $this->data['infos'] = Info::all();
        $this->data['randoms'] = Artikel::orderByRaw('RAND()')->take(1)->get();
        $this->data['recents'] = Artikel::orderBy('created_at', 'DESC')->take(4)->get();
        $this->data['mostpop'] = Artikel::orderBy('pageview', 'DESC')->take(4)->get();
        $this->data['kategoris'] = Kategori::withCount('artikel')->get();
    }

    /**
     * Untuk menampilkan halaman list artikel.
     *
     * @return view
     */
    public function index()
    {
        $this->data['artikels'] = Artikel::orderBy('created_at', 'DESC')->paginate(8);
        $this->data['title'] = 'Portal Berita Kotha Pro Malang';
        return view('blog.indexblog', $this->data);
    }

    /**
     * Untuk menampilkan halaman single artikel.
     *
     * @param  string  $slug
     * @return view
     */
    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $this->data['relatedartikel'] = Artikel::where('kategori_id', $artikel->kategori_id)->where('id', '!=', $artikel->id)->take(3)->get();
        if(!$artikel){
            abort(503);
        }
        $artikel->increment('pageview');
        $artikel->save();
        $this->data['title'] = $artikel->judulartikel;
        $this->data['artikel'] = $artikel;
        return view('blog.singleblog', $this->data); 
    }

    /**
     * Artikel baru - Untuk menyimpan ke database dan blast email.
     *
     * @param  string  $slug
     * @return void
     */
    /*public function artikel_baru(Request $request)
    {
        // input db
        $this->input_db_artikel_baru($request);
        // blast email ke orang yang daftar newsletter
        $this->blast_email_artikel_baru($request);
    }

    public function input_db_artikel_baru(Request $request)
    {
        $artikel = new Artikel;
        $artikel->.... = ...
        $artikel->save();
    }

    public function blast_email_artikel_baru(Request $request)
    {
        Mail::........
    }*/

    public function seacrh(request $request)
    {
        $cari = $request->get('search');
        $hasil = Artikel::where('judulartikel', 'LIKE', '%' . $cari . '%')->paginate(5);
        return view('artikel.indexblog')->with('hasil', $hasil);
    }

    public function getAuthor($id)
    {
        $infos = Info::all();
        $randoms = Artikel::orderByRaw('RAND()')->take(1)->get();
        $recents = Artikel::orderBy('created_at', 'DESC')->take(4)->get();
        $mostpop = Artikel::orderBy('pageview', 'DESC')->take(4)->get();
        $kategoris = Kategori::withCount('artikel')->get();
        $user = User::find($id);
        return view ('blog.artikeluser', ['user' => $user, 'kategoris' => $kategoris, 'recents' => $recents, 'mostpop' => $mostpop, 'randoms'=> $randoms, 'infos'=>$infos]);
    }

    public function getKategori($id)
    {   
        $infos = Info::all();
        $recents = Artikel::orderBy('created_at', 'DESC')->take(4)->get();
        $artikel = Artikel::where('kategori_id', $id)->paginate(8);
        $mostpop = Artikel::orderBy('pageview', 'DESC')->take(4)->get();
        $kategoris = Kategori::withCount('artikel')->get();
        $randoms = Artikel::orderByRaw('RAND()')->take(1)->get();
        return view ('blog.kontenkategori', ['kategoris' => $kategoris, 'artikel' => $artikel, 'recents' => $recents, 'mostpop' => $mostpop, 'randoms' => $randoms, 'infos'=>$infos]);
    }


    public function postKontak(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required',
            ]);

        $message = new message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->pesan;

        Mail::send('blog.message',['message' => $message], function($m) {
            $m->from(Input::get('email'), 'Message Blog');
            $m->to('imansetyawan33@gmail.com')
                ->subject(Input::get('subject'));
        });

        $message->save();
        return redirect('/blog');
    }

    public function getContact()
    {
        $infos = Info::all();
        $randoms = Artikel::orderByRaw('RAND()')->take(1)->get();
        $kategoris = Kategori::all();
        return view ('blog.contactus', ['kategoris' => $kategoris, 'randoms'=>$randoms, 'infos'=> $infos]);
    }

    public function postSubscriber(Request $request)
    {
        

    }
}

