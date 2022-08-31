<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirigentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dirigentes', function (Blueprint $table) {
            $table->id();
            $table->string('dirigente_nome',50);
            $table->string('bi',14)->unique();
            $table->string('endereco',30);
            $table->date('data_nascimento');
            $table->string('email',30)->nullable()->unique();
            $table->longText('descricao')->nullable();
            $table->foreignId('agrupamento_id')->nullable()->constrained();
            $table->foreignId('patrulha_id')->nullable()->constrained();
            $table->foreignId('dirigente_funcaos')->nullable()->constrained();
            $table->foreignId('seccao_id')->nullable()->constrained();
            $table->foreignId('unidade_id')->nullable()->constrained();
            $table->foreignId('unidade_autonoma_id')->nullable()->constrained();

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
        Schema::dropIfExists('dirigentes');
    }
}
