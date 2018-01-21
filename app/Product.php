<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Declare associated table
    protected $table = 'products';

    // Declare assignable attributes
    protected $fillable = ['product_name', 'department', 'graphic_size', 'ink_type', 'graphic_placement', 'image', 'product_notes', 'favorite_product'];

    // Assign relation to other tables
    public function productDetails()
    {
        return $this->hasMany('App\ProductDetail', 'id', 'p_details_id');
    }
}
