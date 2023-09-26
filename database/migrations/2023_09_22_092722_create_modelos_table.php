<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nome");
            $table->integer("altura");
            $table->integer("manequim");
            $table->integer("busto");
            $table->integer("cintura");
            $table->integer("quadril");
            $table->string("cor_dos_olhos");
            $table->string("cor_do_cabelo");
            $table->integer("calcado");
            $table->string("cidade");
            $table->string("categoria");
            $table->string("seccao");
            $table->string("genero");
            $table->string("imagem");
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
        Schema::dropIfExists('modelos');
    }
}
