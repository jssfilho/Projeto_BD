<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAluguel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluguels', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->decimal('valor_condominio', 8, 2)->nullabel();
            $table->decimal('valor_aluguel', 8, 2)->nullabel();
            $table->date('data_inicio')->nullabel();
            $table->date('data_fim')->nullabel();
            $table->foreignId('id_imovel')->references('id')->on('imovels');
            $table->string('cpf_locador')->nullable();
        });
        Schema::table('aluguels', function($table) {
            $table->foreign('cpf_locador')->references('cpf')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluguels');
    }
}
