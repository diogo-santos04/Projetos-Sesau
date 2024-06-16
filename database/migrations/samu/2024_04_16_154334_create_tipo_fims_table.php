<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoFimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samu.tipo_fins', function (Blueprint $table) {
            $table->id();
            $table->string('dpvat')->nullable();
            $table->string('inss')->nullable();
            $table->string('judicial')->nullable();
            $table->string('outros')->nullable();
            
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
        Schema::dropIfExists('samu.tipo_fins');
    }
}
