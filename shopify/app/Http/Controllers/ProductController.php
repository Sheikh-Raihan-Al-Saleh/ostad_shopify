<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Product;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection=Collection::all();
        $product=Product::all();
        return view('product.index',compact('collection','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->collection_id=$request->collection_id;
        $product->shop_id=auth()->user()->id;
        $product->save();
        
        $redirectUrl = getRedirectRoute('product.index');
        return redirect($redirectUrl);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=Product::findOrfail($id);
        $collection=Collection::all();
        return view('product.edit',compact('product','collection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $product=Product::where('id',$request->id)->first();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->collection_id=$request->collection_id;
        $product->shop_id=auth()->user()->id;
        $product->save();

        $redirectUrl = getRedirectRoute('product.index');
        return redirect($redirectUrl);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
