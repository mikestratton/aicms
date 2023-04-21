<?php

namespace App\Http\Controllers;

use App\Models\ProgrammingLanguage;
use App\Http\Requests\StoreProgrammingLanguageRequest;
use App\Http\Requests\UpdateProgrammingLanguageRequest;

class ProgrammingLanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $codes = ProgrammingLanguage::all();

        return view('admin.code.index', [
            'codes' => $codes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("code.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgrammingLanguageRequest $request)
    {
        $code = new ProgrammingLanguage;
        $code->name = $request->name;

        $code->save();
        return redirect('/code');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgrammingLanguage $programmingLanguage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgrammingLanguage $programmingLanguage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgrammingLanguageRequest $request, ProgrammingLanguage $programmingLanguage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgrammingLanguage $programmingLanguage)
    {
        //
    }
}
