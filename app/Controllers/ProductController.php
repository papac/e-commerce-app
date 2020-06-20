<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Bow\Http\Request;

class ProductController extends Controller
{
	/**
	 * Define the product model
	 * 
	 * @var Product
	 */
	private $product;

	/**
	 * Define the category model
	 * 
	 * @var Category
	 */
	private $category;

	/**
	 * ProductController constructor
	 * 
	 * @param Product $product
	 * @return void
	 */
	public function __construct(Product $product, Category $category)
	{
		$this->product = $product;
		$this->category = $category;
	}

	/**
	 * Show the list of product
	 * 
	 * @param Request $request
	 * @return string
	 */
    public function __invoke(Request $request)
    {
    	$category_active_id = $request->get('category');
    	$query = $this->product->where('status', 1);

    	if (!is_null($category_active_id)) {
    		$query = $query->where('category_id', (int) $category_active_id);
    	}

    	$products = $query->get();
    	$categories = $this->category->get();
    	$category = $this->category->where('id', (int) $category_active_id)->first();

    	return $this->render('product.index', compact('products', 'categories', 'category', 'category_active_id'));
    }

	/**
	 * Show the single product
	 * 
	 * @param Request $request
	 * @return string
	 */
    public function showProduct(Request $request, $product_id)
    {
    	$product = $this->product->where('status', 1)->where('id', $product_id)->first();

    	return $this->render('product.presentation', compact('product'));
    }
}
