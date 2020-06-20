<?php

namespace App\Models;

use Bow\Database\Barry\Model;

class Product extends Model
{
	/**
	 * Get the product associate
	 * 
	 * @return Produit|null
	 */
    public function commands()
    {
    	return $this->hasMany(Command::class, 'product_id');
    }

	/**
	 * Get the category associate
	 * 
	 * @return Category|null
	 */
    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id');
    }
}