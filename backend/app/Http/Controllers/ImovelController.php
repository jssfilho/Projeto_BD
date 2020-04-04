<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use App\Models\Endereco;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imoveis = Imovel::all();

        return response()->json($imoveis, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        /*$validator = Validator::make($request->all(),[
            //exemplo de validação
            //'descricao' => 'required|min:1|max:255|email|unique:imoveis'
        ]);
        if($validator ->fails()){
            $erros  = $validator->errors();
            return response()->json($erros, 400);
        }
        $imovel = Imovel::create($request->all());
        return response()->json($imovel, 200);*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imovel = new Imovel;
        $endereco_imovel = new Endereco;
        $endereco_imovel->uf = $request->uf;
        $endereco_imovel->cidade = $request->cidade;
        $endereco_imovel->bairro = $request->bairro;
        $endereco_imovel->cep = $request->cep;
        $endereco_imovel->rua = $request->rua;
        $endereco_imovel->numero = $request->numero;
        $endereco_imovel->complemento = $request->complemento;
        $endereco_imovel->save();
        $imovel->id_endereco = $endereco_imovel->id;
        $imovel->id_endereco = $request->descricao;
        //cpf proprietario???
        $imovel->save();
        return response()->json($imovel->id, 200);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function show(Imovel $imovel)
    {
        return response()->json($imovel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function edit(Imovel $imovel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Imovel $imovel)
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
        //$imovel->update($request->all());
        return response()->json($imovel, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imovel  $imovel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imovel $imovel)
    {   
        $descricao = $imovel->descricao;
        $imovel->delete();

        return response()->json($descricao, 200);
    }
}
