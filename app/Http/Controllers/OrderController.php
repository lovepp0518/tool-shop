<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {
        return view('order.create', ['product' => $product]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Product $product) {
        return "success";
    }
}
