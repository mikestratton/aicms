<?php

namespace App\Http\Controllers;

use App\Models\AI;
use App\Http\Requests\StoreAIRequest;
use App\Http\Requests\UpdateAIRequest;

class AIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.ai.index');
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
    public function store(StoreAIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AI $aI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AI $aI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAIRequest $request, AI $aI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AI $aI)
    {
        //
    }
}
