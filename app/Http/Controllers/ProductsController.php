<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        $product = new Product();
        $product->name_ro = $request->input('name_ro');
        $product->name_en = $request->input('name_en');
        $product->desc_ro = $request->input('desc_ro');
        $product->categ = $request->input('categ');
        $product->desc_en = $request->input('desc_en');
        $product->cover_image = $fileNameToStore;
        $product->price = $request->input('price');
        $product->save();

        return redirect('/products')->with('success', 'Produs adăugat cu succes');
        //$post->price = $request->input("");
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
        

        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
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

        if($request->hasFile('cover_image'))
        {

        $filenameWithExt = $request->file('cover_image')->getClientOriginalImage();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        $product = Product::find($id);
        $product->name_ro = $request->input('name_ro');
        $product->name_en = $request->input('name_en');
        $product->desc_ro = $request->input('desc_ro');
        $product->categ = $request->input('categ');
        $product->desc_en = $request->input('desc_en');
        if($request->hasFile('cover_image'))
        {
            $product->cover_image = $fileNameToStore;
        }
        $product->price = $request->input('price');
        $product->save();

        return redirect('/products')->with('success', 'Produs actualizat cu succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        Storage::delete('public/cover_images/'.$product->cover_image);
        $product->delete();
        return redirect('/products')->with('success', 'Produs șters cu succes');

    }
}
