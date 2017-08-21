<?php

namespace App\Http\Controllers;

use App\Morador_Contas;
use App\Conta;
use App\Morador;
use Illuminate\Http\Request;

class MoradorContasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Morador $morador)
    {
        $mor_cont = Morador_Contas::all();
        $i = 0;
        $t = 0;

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

        foreach ($mor_cont as $m_c) {
            if( $m_c->morador_id == $morador->id)
            {
                $MoradorContas[$i] = $m_c;
                $t = $t + $m_c->valor;
                $i++;
            }
        }

        if($MoradorContas != null)
        {

            return view('MoradorContas.index')->with('MoradorContas', $MoradorContas)->with('t', $t);
        
        }
    }

    public function indexMesReferencia(Morador $morador)
    {
        $mesReferencia = $_POST['mesReferencia'];
        $mor_cont = Morador_Contas::all();
        $i = 0;
        $t = 0;

        $moradores = Morador::all();
        $contas = Conta::all();

        $qnt_moradores = count($moradores);

        foreach ($mor_cont as $m_c) {
            $m_c->delete();
        }

        foreach ($moradores as $m) {
            foreach ($contas as $c ) {
                if($c->mesReferencia == $mesReferencia)
                {
                    $morador_conta = new Morador_Contas();
                    $morador_conta->tipoConta = $c->tipo;
                    $morador_conta->valor = $c->valor/$qnt_moradores;
                    $morador_conta->conta_id = $c->id;
                    $morador_conta->morador_id = $m->id;
                    $morador_conta->save();
                }
            }
        }

        foreach ($mor_cont as $m_c) {
            if( $m_c->morador_id == $morador->id)
            {
                $MoradorContas[$i] = $m_c;
                $t = $t + $m_c->valor;
                $i++;
            }
        }

        if($MoradorContas != null)
        {

            return view('MoradorContas.indexMesReferencia')->with('MoradorContas', $MoradorContas)->with('t', $t)->with('mesReferencia', $mesReferencia);
        
        }
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
     * @param  \App\MoradorContas  $MoradorContas
     * @return \Illuminate\Http\Response
     */
    public function show(MoradorContas $MoradorContas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MoradorContas  $MoradorContas
     * @return \Illuminate\Http\Response
     */
    public function edit(MoradorContas $MoradorContas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MoradorContas  $MoradorContas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MoradorContas $MoradorContas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MoradorContas  $MoradorContas
     * @return \Illuminate\Http\Response
     */
    public function destroy(MoradorContas $MoradorContas)
    {
        //
    }
}
