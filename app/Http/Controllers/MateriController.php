<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Materi;

class MateriController extends Controller
{
    public function show(){
    	$materis = Materi::all();
    	
    	$data =['materis'=>$materis];
    	return view('materi', $data);
    }

    public function single($id){

    	$materi = Materi::find($id);
    	return view('single-materi', compact('materi'));

    	
    }
}
