<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNovoCampoCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Alteração na tabela posts
        schema::table('posts', function (Blueprint $table){
            $table->foreignId('categoria_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        schema::table('posts', function (Blueprint $table){
            $table->dropForeign(['categoria_id']);

        });
    }
}
