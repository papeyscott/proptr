<?php

namespace App\Http\Controllers;

class registerController extends Controller{

	public function getregister($end = 'frontend'){
		return view($end. '.other.register');
	}

	
}