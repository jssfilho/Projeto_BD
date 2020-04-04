<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use Illuminate\Http\Request;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alugueis = Aluguel::all();

        return response()->json($imoveis, 200);
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
        $aluguel = new Aluguel;
        $aluguel->id_imovel = $request->id_imovel;
        $aluguel->valor_aluguel = $request->valor_aluguel;
        $aluguel->valor_condominio = $request->valor_condominio;
        $aluguel->data_inicio = $request->data_inicio;
        $aluguel->data_fim = $request->data_fim;
        $aluguel->cpf_locador = $request->cpf_locador;
        $aluguel->save();

        return response()->json($aluguel, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function show(Aluguel $aluguel)
    {
        return response()->json($aluguel, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluguel $aluguel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluguel $aluguel)
    {
        /*
        $validator = Validator::make($request->all(),[
            //exemplo de validação
            //'descricao' => 'required|min:1|max:255|email|unique:imoveis'
        ]);
        if($validator ->fails()){
            $erros  = $validator->errors();
            return response()->json($erros, 400);
        }*/

        //não se sabem quais seram
        //$aluguel->update($request->all());
        return response()->json($aluguel, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluguel  $aluguel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluguel $aluguel)
    {
        $descricao = $aluguel->id_imovel;
        $aluguel->delete();

        return response()->json($descricao, 200);
    }
}
