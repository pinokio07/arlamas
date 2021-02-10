<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function darat()
    {
    	return view('pages.service.darat');
    }

    public function laut()
    {
      return view('pages.service.laut');
    }

    public function udara()
    {
      return view('pages.service.udara');
    }

    public function pickup()
    {
      return view('pages.service.pickup');
    }
}
