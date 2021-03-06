<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\PublicProduct;
use App\Slider;
use Illuminate\Http\Request;

class PublicProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::categories();
        $brands     = Brand::brands();
        $products   = Product::products();
        $sliders    = Slider::activeSliders();
        return view('public.layouts.home', compact('categories','brands','products', 'sliders'));
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
     * @param  \App\PublicProduct  $fontend
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories        = Category::categories();
        $brands            = Brand::brands();
        $relatedProducts   = Product::products();
        $product           = Product::product($id);
        return view('public.layouts.productDetails', compact('categories','brands','relatedProducts', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PublicProduct  $fontend
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
     * @param  \App\PublicProduct  $fontend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PublicProduct  $fontend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    }
