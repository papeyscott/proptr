<?php

namespace App\Http\Controllers;

class frontController extends Controller{

	public function getIndexPage($end = 'frontend'){

		return view($end. '.user.index');
	}

	}