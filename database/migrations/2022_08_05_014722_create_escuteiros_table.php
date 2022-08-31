<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscuteirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escuteiros', function (Blueprint $table) {
            $table->id();
            $table->string('escuteiro_nome',50);
            $table->string('bi',14)->unique();
            $table->string('endereco',30);
            $table->date('data_nascimento');
            $table->string('email',30)->nullable()->unique();
            $table->longText('descricao')->nullable();
            $table->foreignId('patrulha_id')->nullable()->constrained();
            $table->foreignId('parente_id')->nullable()->constrained();
            $table->boolean('estado');
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
        Schema::dropIfExists('escuteiros');
    }
}
