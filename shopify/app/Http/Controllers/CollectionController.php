<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\URL;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection=Collection::where('shop_id',auth()->user()->id)->get();
        return view('collection.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function productIndex($id)
    {
        $collection = Collection::findOrFail($id);
        $products = $collection->products;
        return view('collection.productindex', compact('collection', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $collection= new Collection();
        $collection->name=$request->name;
        $collection->description=$request->description;
        $collection->shop_id=auth()->user()->id;
        $collection->save();

        $redirectUrl = getRedirectRoute('collection.index');
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
        $collection=Collection::findOrFail($id);
        return view('collection.edit',compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $collection=Collection::where('id',$request->id)->first();
        $collection->name=$request->name;
        $collection->description=$request->description;
        $collection->shop_id=auth()->user()->id;
        $collection->save();

        
        $redirectUrl = getRedirectRoute('collection.index');
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
