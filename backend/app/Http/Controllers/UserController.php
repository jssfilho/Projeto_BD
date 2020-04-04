<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Endereco;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get sem parametro
        $users = User::all();

        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //post
        $endereco_user = new Endereco;
        $endereco_user->uf = $request->uf;
        $endereco_user->cidade = $request->cidade;
        $endereco_user->bairro = $request->bairro;
        $endereco_user->cep = $request->cep;
        $endereco_user->rua = $request->rua;
        $endereco_user->numero = $request->numero;
        $endereco_user->complemento = $request->complemento;

        $endereco_user->save();
        $user = new User;
        $user->cpf = $request->cpf;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password= $request->password;
        $user->data_nascimento = $request->data_nascimento;
        $user->phone = $request->phone;
        $user->endereco_id = $endereco_user->id;
        $user->save();
        return response()->json($user, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        //get com parametro
        return response()->json($users, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        //falta saber quais atributos são
        //put ***********
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        //delete
        $cpf = $users->cpf;
        $users->delete();
        return response()->json($cpf, 200);
    }
}
