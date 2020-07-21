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
        // $selected_ids = Chanchita::find($chanchita)->products()->get()->pluck('id')->toArray();
        // $products = Product::where('category_id', $category_id)->get();

        // return view('admin.chanchitas.categories.index', compact('products', 'selected_ids', 'chanchita'));
        return view('admin.chanchitas.categories.index', compact('chanchita'));
    }

    
}
