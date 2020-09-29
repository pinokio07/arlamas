<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrosurController extends Controller
{
    public function brosur()
    {
    	$brosur = \App\Models\Brosur::all();

    	return view('pages.tentang.brosur', compact(['brosur']));
    }
}
