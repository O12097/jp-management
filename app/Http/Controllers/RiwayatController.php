<?php

namespace App\Http\Controllers;

use App\Models\RiwayatModel;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('riwayat.riwayat');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RiwayatModel $riwayatModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RiwayatModel $riwayatModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RiwayatModel $riwayatModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RiwayatModel $riwayatModel)
    {
        //
    }
}
