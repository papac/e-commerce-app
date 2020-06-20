<?php

namespace App\Models;

use Bow\Database\Barry\Model;
use Bow\Database\Barry\Collection;

class Category extends Model
{
	/**
	 * Define the table use by ORM
	 * 
	 * @var string
	 */
	protected $table = 'categories';

	/**
	 * Get the products
	 * 
	 * @return Collection
	 */
	public function products()
	{
		return $this->hasMany(Product::class, 'category_id');
	}
}