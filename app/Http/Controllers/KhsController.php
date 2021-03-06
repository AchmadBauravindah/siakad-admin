<?php

namespace App\Http\Controllers;

use App\Models\Khs;
use Illuminate\Http\Request;

class KhsController extends Controller
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
    public function indexAdmin()
    {
        $khses = Khs::all();
        return view('auth.admin.khs.index', compact('khses'));
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
     * @param  \App\Models\Khs  $khs
     * @return \Illuminate\Http\Response
     */
    public function show(Khs $khs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Khs  $khs
     * @return \Illuminate\Http\Response
     */
    public function edit(Khs $khs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Khs  $khs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Khs $khs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Khs  $khs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Khs $khs)
    {
        //
    }
}
