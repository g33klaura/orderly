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
        // Form page to capture new product blank entry
        // NEEDS THIS VIEW
        return view('blanks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Array create method?
        // $blank = ProductBlank::create($request->all());
        // return response()->json($blank, 201);

        $blank = new ProductBlank;

        $blank->department = $request->dept;
        $blank->blank_type = $request->type;
        $blank->blank_name = $request->name;
        $blank->blank_color = $request->color;
        
        $blank->save();

        return response()->json($blank, 201);
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
    
        // dd($blank);

        // return view('welcome', compact( 'blank' ));
        // return response('blank', 200);
        return response()->json($blank, 200);
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
        $id->update($request->all());

        return response()->json($id, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id->delete();

        return response()->json(null, 204);
    }
}
