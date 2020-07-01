<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Chanchita;

class ChanchitaCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($chanchita, $category_id)
    {
        // dd($chanchita);
        // dd($category_id);
        $selected_ids = Chanchita::find($chanchita)->products()->get()->pluck('id')->toArray();
        // dd(in_array(1, $chanchita_products_selected_ids));
        
        $products = Product::where('category_id', $category_id)->get();

        // $products = $products_without->map(function ($product) {
        //     if (in_array($product->id, [1])) {
        //         return $product->push('selected', true);
        //     }
        // });
        // foreach ($products_without as $product) {
        //     if (in_array($product->id, [1])) {
        //         return $product->put('selected', true);
        //     }
        // };

        // dd($products_without);

        return view('admin.chanchitas.categories.index', compact('products', 'selected_ids', 'chanchita'));
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

    public function add_to_cart(Request $request)
    {
        // dd($request->chanchita_id);
        // dd($request->quantity);
        // dd($request->product_id);

        $chanchitad = Chanchita::find($request->chanchita_id);

        // dd($chanchitad);
        $chanchitad->products()->attach($request->product_id, ['quantity'=>$request->quantity]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
