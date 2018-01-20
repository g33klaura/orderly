<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductBlank;

// All of these methods get put into web & API routes files
class ProductBlankController extends Controller
{
    /**
     * Display a listing of the product blanks.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // web routes method
        // $blanks = ProductBlank::all();

        // foreach ($blanks as $blank) {
        //     echo $blank->blank_name . ' ';
        // }

        // api routes method
        return response(ProductBlank::all(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blank = ProductBlank::find($id);
    
        dd($blank);

        // return view('welcome', compact( 'blank' ));
        return response('blank', 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
