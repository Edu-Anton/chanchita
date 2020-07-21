<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Product;
use App\ChanchitaProduct;
use Illuminate\Http\Request;

class ChanchitaProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $chanchita_id, $category_id)
    {
        // dd($chanchita_id);
        $products = Product::where('category_id', $category_id)->get();
        // $selecteds = Chanchita::find($chanchita_id)->products()->get()->pluck('id')->toArray();
        $selecteds = ChanchitaProduct::where('chanchita_id', $chanchita_id)->get()->pluck('id')->toArray();
        // $selecteds = [2,3];
        // dd($products);
        // return $products;
        return response()->json(['products'=>$products, 'chanchita_id'=>$chanchita_id, 'selecteds' => $selecteds]);
        // dd($request, $chanchita_id, $category_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function added(Request $request)
    {
        // dd($request->all());
        $chproduct = new ChanchitaProduct;
        $chproduct->name = $request->name;
        $chproduct->quantity = $request->quantity;
        $chproduct->url_img = $request->url_img;
        $chproduct->price = $request->price;
        $chproduct->chanchita_id = $request->chanchita_id;
        $chproduct->save();
        // $chanchita_product = ChanchitaProduct::create([$request->all()]);

        return response()->json(['msg' => 'almacenado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
