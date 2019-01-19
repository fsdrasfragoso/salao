<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCotegoriaidToTiposervicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tipo__servicos', function (Blueprint $table) {
            $table->integer('categoria_servico_id')->unsigned()->after('id');
            $table->foreign('categoria_servico_id')->references('id')->on('categoria_servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tipo__servicos', function (Blueprint $table) {
            //
        });
    }
}
