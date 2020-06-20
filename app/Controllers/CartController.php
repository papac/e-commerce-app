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
    	$products = $this->product_stack->getProducts();
    	$total_price = 0;

    	foreach($products as $product) {
    		$total_price += ($product['model']->price * $product['quantity']);
    	}

    	return $this->render('product.card', compact('products', 'total_price'));
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
    		return redirect('/products/'.$product['id'].'?message=Le produit existe déjà dans votre liste');
    	}

    	$this->product_stack->push($product);

		return redirect('/products/'.$product['id'].'?message=Le produit existe déjà dans votre liste');
    }

    /**
     * Delete product in stack
     * 
     * @param Request $request
     * @param int $product_id
     * @return mixed
     */
    public function removeProduct(Request $request, $product_id)
    {
    	$product_id = (int) $product_id;

    	if (!$this->product_stack->exists($product_id)) {
    		return redirect('/?message=Le produit n\'existe pas dans le chariot');
    	}

    	$this->product_stack->remove($product_id);
		return redirect('/cart/?message=Le produit a été supprimé du chariot');
    }
}
