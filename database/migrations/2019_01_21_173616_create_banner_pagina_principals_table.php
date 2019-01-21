<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerPaginaPrincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_pagina_principals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('slogan');
            $table->string('descricao');
            $table->string('url');
            $table->string('link');
            $table->string('butaao');
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
        Schema::dropIfExists('banner_pagina_principals');
    }
}
