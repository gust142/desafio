<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('valor',5,2);
            $table->string('nomeCompleto');
            $table->integer('numeroCartao');
            $table->integer('cvv');
            $table->string('exp');
            $table->integer('tipoPagamentoId')->unsigned();
            $table->foreign('tipoPagamentoId')->references('id')->on('tipo_pagamentos');
            $table->timestamps();
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
