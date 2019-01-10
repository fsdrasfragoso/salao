<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichaTecnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_tecnicas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('caracteristicas');
            $table->string('marca');
            $table->string('modelo');
            $table->integer('produto_id')->unsigned();
            $table->foreign('produto_id')->references('id')->on('produto');
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
        Schema::dropIfExists('ficha_tecnicas');
    }
}
