<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFixDataRequest;
use App\Http\Requests\UpdateFixDataRequest;
use App\Models\FixData;

class FixDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreFixDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFixDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FixData  $fixData
     * @return \Illuminate\Http\Response
     */
    public function show(FixData $fixData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FixData  $fixData
     * @return \Illuminate\Http\Response
     */
    public function edit(FixData $fixData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFixDataRequest  $request
     * @param  \App\Models\FixData  $fixData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFixDataRequest $request, FixData $fixData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FixData  $fixData
     * @return \Illuminate\Http\Response
     */
    public function destroy(FixData $fixData)
    {
        //
    }
}
