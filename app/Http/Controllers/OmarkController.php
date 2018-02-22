<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OmarkController extends Controller
{
    //

    public function index()
    {
    	return view('omark_secondary.gallery');
    }

    public function gallery2()
    {
    	return view('omark_secondary.gallery2');
    }

    public function gallery3()
    {
    	//
    }

}
