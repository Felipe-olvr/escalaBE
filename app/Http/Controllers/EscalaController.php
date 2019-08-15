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
}
