<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
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

        return response()->json($imoveis);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $validator = Validator::make($request->all(),[
            //exemplo de validação
            //'descricao' => 'required|min:1|max:255|email|unique:imoveis'
        ]);
        if($validator ->fails()){
            $erros  = $validator->errors();
            return response()->json($erros, 400);
        }
        $imovel = Imovel::create($request->all());
        return response()->json($imovel, 200);
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
        $validator = Validator::make($request->all(),[
            //exemplo de validação
            //'descricao' => 'required|min:1|max:255|email|unique:imoveis'
        ]);
        if($validator ->fails()){
            $erros  = $validator->errors();
            return response()->json($erros, 400);
        }
        $imovel->update($request->all());
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
        $imovel->delete();

        return response()->json("Imovel deletado", 200);
    }
}
