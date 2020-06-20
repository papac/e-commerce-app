<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use Bow\Http\Request;

class RegisterController extends Controller
{
	/**
	 * Show register form
	 * 
	 * @return void
	 */
    public function __invoke()
    {
    	return $this->render('auth/register');
    }

	/**
	 * Make register
	 * 
	 * @param Request $request
	 * @return mixed
	 */
    public function register(Request $request)
    {
    	// Make register
    }
}
