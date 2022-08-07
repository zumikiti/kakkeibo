<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCashBookRequest;
use App\Http\Requests\UpdateCashBookRequest;
use App\Models\CashBook;

class CashBookController extends Controller
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
     * @param  \App\Http\Requests\StoreCashBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCashBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function show(CashBook $cashBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function edit(CashBook $cashBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCashBookRequest  $request
     * @param  \App\Models\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCashBookRequest $request, CashBook $cashBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CashBook  $cashBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashBook $cashBook)
    {
        //
    }
}
