<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all() ;

        return Inertia::render('Product/list', [

            'products' => $products,
            'routes' => [
                'edit' => route('edit-product', ''). '/',
                'create' => route('new-product'),
                'delete' => route('delete-product', ''). '/',
            ]
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return Inertia::render('Product/create-product', ['formRoute' => route('new-product')]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        // dd($request->all()) ;

        $form = $request->all() ;

        $product = Product::create($form) ;

        return Redirect::route('products')->with([

            'success' => true,
            'message' => 'Great! Product was successfully created.'
        ]) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        // dd($product) ;

        return Inertia::render('Product/edit', [

            'product' => $product,
            'formRoute' => route('edit-product', $product->id)
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        // dd($request->all()) ;
        $form = $request->all() ;

        if($product->update($form))
            return Redirect::route('products')->with([

                'success' => true,
                'message' => 'Great! Product was successfully modified.'
            ]) ;
        else return Redirect::route('products')->with([

            'error' => true,
            'message' => 'Sorry. Something gone wrong.'
        ]) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        if($product->delete())
            return Redirect::route('products')->with([

                'success' => true,
                'message' => 'Great! Product was deleted with success.'
            ]);
        else return Redirect::route('products')->with([

            'error' => true,
            'message' => 'Sorry. Something gone wrong.'
        ]) ;
    }
}
