<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelaGeneroFilme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generoFilme', function (Blueprint $table) {
            $table->bigIncrements('generoFilme_id');
            $table->unsignedBigInteger('filme_id');
            $table->unsignedBigInteger('genero_id');
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
    }
}
