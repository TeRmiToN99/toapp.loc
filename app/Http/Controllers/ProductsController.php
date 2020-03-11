<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Blog\BaseController;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends BaseControllerController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::all();


        return view('products.index', compact('items'));

    }
}
