<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBlank extends Model
{
    // Declare associated table
    protected $table = 'product_blanks';

    // Declare assignable attributes
    protected $fillable = ['department', 'blank_type', 'blank_name', 'blank_color'];

    // Define local scope function for repeatedly used query
    public function scopeListTshirts( $query )
    {
        return $query->where('blank_type', 'T-shirt')
            ->orderBy('blank_name', 'desc');
    }
}
