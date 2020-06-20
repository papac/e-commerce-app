<?php

namespace App\Controllers;

use App\Controllers\Controller;
use Bow\Http\Request;

class SupportController extends Controller
{
    /**
     * Show index
     *
     * @param Request $request
     * @return string
     */
    public function __invoke(Request $request)
    {
        return $this->render('vendor.landing');
    }

    /**
     * Show Contact
     *
     * @param Request $request
     * @return string
     */
    public function showContact(Request $request)
    {
        return $this->render('vendor.contact');
    }

    /**
     * Send contact
     *
     * @param Request $request
     * @return string
     */
    public function sendContact(Request $request)
    {
        // Send contact here
    }
}
