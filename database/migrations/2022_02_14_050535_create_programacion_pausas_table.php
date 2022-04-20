<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramacionPausasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacion_pausas', function (Blueprint $table) {
            $table->id();
            $table->date('fechaprogramacionpausa');
            $table->time('horaprogramacionpausa');
            $table->boolean('evidaneciamultimedia',1);
            $table->unsignedBigInteger('empleados_id');
            $table->foreign('empleados_id')->references('id')->on('empleados');
            $table->unsignedBigInteger('jornadapausas_id');
            $table->foreign('jornadapausas_id')->references('id')->on('jornadapausas');
            $table->unsignedBigInteger('tipopausas_id');
            $table->foreign('tipopausas_id')->references('id')->on('tipopausas');
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
        Schema::dropIfExists('programacion_pausas');
    }
}
