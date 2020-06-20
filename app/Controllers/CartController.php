<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Services\ProductStackService;
use Bow\Http\Request;

class CartController extends Controller
{
	/**
	 * Define the ProductStackService instance
	 * 
	 * @var ProductStackService
	 */
	private $product_stack;

	/**
	 * CartController constructor
	 * 
	 * @param ProductStackService $product_stack
	 * @return void
	 */
	public function __construct(ProductStackService $product_stack)
	{
		$this->product_stack = $product_stack;
	}

	/**
	 * Show the list of product selected by user
	 * 
	 * @return void
	 */
    public function __invoke()
    {
    	return $this->render('product.card');
    }

    /**
     * Push the product
     * 
     * @param Request $request
     * @return void
     */
    public function pushProduct(Request $request)
    {
    	$product = $request->only(['id', 'quantity']);

    	if ($this->product_stack->exists($product['id'])) {
    		return 'Le produit existe déjà dans votre liste';
    	}

    	$this->product_stack->push($product);

		return 'Le produit a bien été ajouté';
    }
}
