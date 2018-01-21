<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    // Declare associated table
    protected $table = 'product_details';

    // Declare assignable attributes
    protected $fillable = ['product_type', 'blank_name', 'blank_color', 'ink_colors', 'product_alias', 'pos_id', 'cost'];

    // Assign relation to other tables
    public function product()
    {
        return $this->belongsTo('App\Product', 'p_details_id');
    }

}
