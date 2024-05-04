<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addCondition(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function clearCartConditions(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function details(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function delete(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
