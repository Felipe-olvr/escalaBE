<?php

namespace App\Http\Controllers;

use App\Models\Escala;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EscalaController extends Controller
{
	/**
    * Create a new controller instance.
    *
    * @return void
    */

	/* This method returns all entries from our table as a json response */
    public function index()
    {
    	$escala = Escala::all();
    	return response()->json($escala);
    }

    public function user_registration()
    {
    	return view('admin.user_registration');
    }

    public function store(Request $request){
    	$escala = new Escala;
    	$escala->user = $request->user;
    	$escala->email = $request->email;
    	$escala->company = $request->company;
    	$escala->escalas = $request->escalas;
    	$escala->status = $request->status; 

    	$escala->save();
    	//dd('show something');
    	return redirect('/admin/user_registration');
    }
}
