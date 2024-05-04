<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',  
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max size to 2MB
            'color' => 'required',
            'size' => 'required',
            'price' => 'required|numeric',
        ]);

        // Get the file name with extension
        $imageNameWithExtension = $request->file('image')->getClientOriginalName();

        // Get just the file name
        $imageName = pathinfo($imageNameWithExtension, PATHINFO_FILENAME);

        // Generate a unique name for the image
        $imageNameToStore = $imageName . '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();

        // Store the image in the public/images directory
        $request->file('image')->storeAs('public/images', $imageNameToStore);

        // Create the product using the create method and request inputs
        $product = Product::create([
            'title' => $request->title,
            'image' => $imageNameToStore,
            'color' => $request->color,
            'size' => $request->size,
            'price' => $request->price,
        ]);

        return redirect()->route('products.index');
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
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->title = $request->input('title');
        $product->image = $request->input('image');
        $product->color = $request->input('color');
        $product->size = $request->input('size');
        $product->price = $request->input('price');
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
