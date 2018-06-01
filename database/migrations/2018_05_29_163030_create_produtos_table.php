<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('codigo')->unique();
            $table->timestamps();

        });

        Schema::create('loja_produto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loja_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->timestamps();

            $table->foreign('loja_id')->references('id')->on('lojas');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loja_produto');
        Schema::dropIfExists('produtos');
    }
}
