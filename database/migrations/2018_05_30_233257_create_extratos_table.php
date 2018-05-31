<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extratos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantidade')->nullable();
            $table->integer('pedido')->nullable();
            $table->integer('data')->nullable();
            $table->integer('loja_produto_id')->unsigned();
            $table->timestamps();

            $table->foreign('loja_produto_id')->references('id')->on('loja_produto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extratos');
    }
}
