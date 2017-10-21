<?php

namespace App\Http\Controllers;

class loginController extends Controller{

	public function getLogin($end = 'frontend'){
		return view($end. '.other.login');
	}

	
}