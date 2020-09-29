<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubungiController extends Controller
{
    public function hubungi()
    {
    	$perusahaan = \App\Models\Perusahaan::first();
    	$pegawai = \App\Models\Pegawai::all();

    	return view('pages.tentang.hubungi', compact(['perusahaan', 'pegawai']));
    }
}
