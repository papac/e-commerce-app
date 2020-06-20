<?php

namespace App\Models;

use Bow\Database\Barry\Model;

class Command extends Model
{
	/**
	 * Get the product associate
	 * 
	 * @return Produit|null
	 */
    public function product()
    {
    	return $this->belongsTo(Product::class, 'product_id');
    }

	/**
	 * Get the user associate
	 * 
	 * @return Produit|null
	 */
    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}