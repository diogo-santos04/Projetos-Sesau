<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtendimentosTable extends Migration
{
    /**
     * Run the migra-----tions.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samu.atendimentos', function (Blueprint $table) {
            $table->id();

            $table->date('data_atendimento')->nullable();
            $table->unsignedBigInteger('solicitante_id')->nullable();
            $table->foreign('solicitante_id')->references('id')->on('samu.pessoas')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('paciente_id')->nullable();
            $table->foreign('paciente_id')->references('id')->on('samu.pessoas')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('tipo_parentesco_id')->nullable();
            $table->foreign('tipo_parentesco_id')->references('id')->on('samu.tipo_parentescos')->onUpdate('cascade')->onDelete('set null');

            $table->unsignedBigInteger('tipo_fim_id')->nullable();
            $table->foreign('tipo_fim_id')->references('id')->on('samu.tipo_fins')->onUpdate('cascade')->onDelete('set null');
            

            
            $table->time('horario_atendimento')->nullable();
            $table->string('endereco_atendimento')->nullable();
            $table->string('fato_acontecido')->nullable();
            $table->string('transportado_para')->nullable();
            $table->text('observacao')->nullable();

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
        Schema::dropIfExists('samu.atendimentos');
    }
}
