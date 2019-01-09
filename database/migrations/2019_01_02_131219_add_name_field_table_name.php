<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNameFieldTableName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
             $table->date('fabricacao') // Nome da coluna
                    ->nullable() // Preenchimento não obrigatório
                    ->after('classificacao');
             
             $table->date('validade') // Nome da coluna
                    ->nullable() // Preenchimento não obrigatório
                    ->after('fabricacao');
            
             $table->integer('destaque') // Nome da coluna
                    ->nullable() // Preenchimento não obrigatório
                    ->after('preco');
          
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            //
        });
    }
}
