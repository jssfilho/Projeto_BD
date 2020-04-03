<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->foreignId('id_aluguel')->references('id')->on('aluguels');
            $table->date('data_vencimento')->nullabel();
            $table->decimal('valor', 9, 2)->nullable();
            $table->boolean('pago')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamentos');
    }
}
