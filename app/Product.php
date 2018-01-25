<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Declare associated table
    protected $table = 'all_products';

    // Declare assignable attributes
    protected $fillable = ['product_name', 'department', 'graphic_size', 'graphic_placement', 'product_type', 'blank_name', 'blank_color', 'ink_colors', 'ink_type', 'pos_alias', 'cost', 'pos_id'];

    // Assign relation to other tables
    // public function productDetails()
    // {
    //     return $this->hasMany('App\ProductDetail', 'id', 'p_details_id');
    // }
}
