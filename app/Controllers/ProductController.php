<?php

namespace App\Controllers;

use App\Controllers\Controller;
use Bow\Http\Request;

class ProductController extends Controller
{
	/**
	 * Show the list of product
	 * 
	 * @param Request $request
	 * @return string
	 */
    public function __invoke(Request $request)
    {
    	return $this->render('product.index');
    }

	/**
	 * Show the single product
	 * 
	 * @param Request $request
	 * @return string
	 */
    public function showProduct(Request $request, $product_id)
    {
    	return $this->render('product.presentation');
    }
}
