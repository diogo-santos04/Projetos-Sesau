<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtocolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samu.protocolos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('atendimento_id')->nullable();
            $table->foreign('atendimento_id')->references('id')->on('samu.atendimentos')->onUpdate('cascade')->onDelete('cascade');
            
            $table->string('nome')->nullable();
            $table->string('prazo')->nullable();
            $table->string('solicitacao')->nullable();
            $table->date('data_solicitacao')->nullable();
            $table->string('servidor')->nullable();
            $table->date('data_retirada')->nullable();

            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->boolean('status')->default(true);

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
        Schema::dropIfExists('samu.protocolos');
    }
}
