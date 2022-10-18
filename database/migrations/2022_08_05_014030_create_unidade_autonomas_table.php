<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadeAutonomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidade_autonomas', function (Blueprint $table) {
            $table->id();
            $table->string('unidade_autonoma_nome',50);
            $table->longText('descricao',250)->nullable();
            $table->foreignId('nucleo_id')->constrained();
            $table->foreignId('seccao_id')->constrained();
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
        Schema::dropIfExists('unidade_autonomas');
    }
}
