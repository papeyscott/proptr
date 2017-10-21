<?php

namespace App\Http\Controllers;

class userController extends Controller{

	public function getUserDashboard($end = 'frontend'){

		return view($end. '.other.dashboard');
	}

	}