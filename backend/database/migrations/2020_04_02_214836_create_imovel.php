<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImovel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->foreignId('id_endereco')->references('id')->on('enderecos');;
            $table->string('cpf_proprietario')->nullable();
            $table->string('descricao');
        });
        Schema::table('imovels', function($table) {
            $table->foreign('cpf_proprietario')->references('cpf')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovels');
    }
}
