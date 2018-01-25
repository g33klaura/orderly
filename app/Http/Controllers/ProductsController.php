<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;  //Model to use

class ProductsController extends Controller
{
    /**
     * Display a listing of all products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // api routes method
        return response(Product::all(),200);
    }

}
