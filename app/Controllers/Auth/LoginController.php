<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use Bow\Http\Request;

class LoginController extends Controller
{
	/**
	 * Show login form
	 * 
	 * @return void
	 */
    public function __invoke()
    {
    	return $this->render('auth/login');
    }

	/**
	 * Make login
	 * 
	 * @param Request $request
	 * @return mixed
	 */
    public function register(Request $request)
    {
    	// Make login
    }
}
