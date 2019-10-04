<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{

	public function index(){

		$no_telp = array('0857999999', '085555555', '0815888888', '08234343434');
		return view('contact', compact('no_telp'));
	}
    //
}
