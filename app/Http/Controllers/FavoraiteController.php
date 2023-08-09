<?php

namespace App\Http\Controllers;

use App\Models\Favoraite;
use App\Http\Requests\StoreFavoraiteRequest;
use App\Http\Requests\UpdateFavoraiteRequest;

class FavoraiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreFavoraiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Favoraite $favoraite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favoraite $favoraite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoraiteRequest $request, Favoraite $favoraite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favoraite $favoraite)
    {
        //
    }
}
