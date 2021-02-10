<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function harga()
    {
      return view('pages.pesan.harga');
    }
}
