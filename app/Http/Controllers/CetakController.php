<?php

namespace App\Http\Controllers;

use App\Models\Cetak;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cetaks = Cetak::latest()->paginate(1);
        return view('cetaks.index',compact('cetaks'))
            ->with('i', (request()->input('page', 1) - 1) * 1);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cetak  $cetak
     * @return \Illuminate\Http\Response
     */
    public function show(Cetak $cetak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cetak  $cetak
     * @return \Illuminate\Http\Response
     */
    public function edit(Cetak $cetak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cetak  $cetak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cetak $cetak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cetak  $cetak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cetak $cetak)
    {
        //
    }
}
