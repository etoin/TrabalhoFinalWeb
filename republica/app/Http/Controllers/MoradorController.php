<?php

namespace App\Http\Controllers;

use App\Morador;
use Illuminate\Http\Request;

class MoradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moradors = Morador::all();
        return view('moradores.index')->with('moradors', $moradors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('moradores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Morador::create( $request->all() );
        return redirect('/moradors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Morador  $morador
     * @return \Illuminate\Http\Response
     */
    public function show(Morador $morador)
    {
        return view('moradores.show')
                  ->with('morador', $morador);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Morador  $morador
     * @return \Illuminate\Http\Response
     */
    public function edit(Morador $morador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Morador  $morador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Morador $morador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Morador  $morador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Morador $morador)
    {
        $morador->delete();
        return redirect('/moradors');
    }
}
