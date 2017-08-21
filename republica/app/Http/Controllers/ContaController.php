<?php

namespace App\Http\Controllers;

use App\Conta;
use App\Morador;
use App\Morador_Contas;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $contas = Conta::all();
        return view('contas.index')->with('contas', $contas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Conta::create( $request->all() );
        $mor_cont = Morador_Contas::all();
        $moradores = Morador::all();
        $contas = Conta::all();

        $qnt_moradores = count($moradores);

        foreach ($mor_cont as $m_c) {
            $m_c->delete();
        }

        foreach ($moradores as $m) {
            foreach ($contas as $c ) {
                $morador_conta = new Morador_Contas();
                $morador_conta->tipoConta = $c->tipo;
                $morador_conta->valor = $c->valor/$qnt_moradores;
                $morador_conta->conta_id = $c->id;
                $morador_conta->morador_id = $m->id;
                $morador_conta->save();
            }
        }
        return redirect('/contas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function show(Conta $conta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function edit(Conta $conta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conta $conta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conta  $conta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conta $conta)
    {
        //
    }
}
