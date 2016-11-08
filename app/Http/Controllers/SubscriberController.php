<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Subscriber;

class SubscriberController extends Controller
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
        $subs = Subscriber::all();
        return view('subs.subs', ['subs'=>$subs] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subs = Subscriber::all();
        return view('subs.insertsubs', ['subs' => $subs]);
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
            'email' => 'required',
            ]);

        $message = new Subscriber;
        $message->email = $request->email;
        $message->save();
        return redirect('/blog');
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
        $subs = Subscriber::find($id);
        return view('subs.editsubs', ['subs'=>$subs] );
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
            'email' => 'required',
            ]);

        $subs = Subscriber::find($id);
        $subs->email = $request->email;
        $subs->save();
        return redirect('app/subscriber');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subs = Subscriber::find($id);
        $subs->delete();
        return redirect('app/subscriber');
    }
}
