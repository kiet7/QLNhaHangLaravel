<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocketController extends Controller
{
    //
    public function __construct()
	{
		
	}
	public function index()
	{
		return view('admin.index2');
	}

	public function sendMessage(){
		return view('admin.index2');
	}

	public function writemessage()
	{
		
		return view('admin.index2');
	}
}
