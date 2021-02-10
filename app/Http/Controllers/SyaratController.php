<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyaratController extends Controller
{
    public function syarat()
    {
      return view('pages.syarat');
    }
}
