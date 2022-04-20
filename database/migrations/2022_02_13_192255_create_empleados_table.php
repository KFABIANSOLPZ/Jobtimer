<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombreempleado',45);
            $table->string('apellidoempleado',45);
            $table->string('documentoempleado',45);
            $table->string('direccionempleado',45);
            $table->string('telefonoempleado',45);
            $table->string('correoempleado',45);
            $table->string('usuarioempleado',45);
            $table->string('contraseñaempleado',45);
            $table->unsignedBigInteger('documentos_id');
            $table->foreign('documentos_id')->references('id')->on('documentos');
            $table->unsignedBigInteger('clientes_id');
            $table->foreign('clientes_id')->references('id')->on('clientes');
            $table->unsignedBigInteger('cargos_id');
            $table->foreign('cargos_id')->references('id')->on('cargos');
            $table->unsignedBigInteger('areas_id');
            $table->foreign('areas_id')->references('id')->on('areas');
            $table->unsignedBigInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->unsignedBigInteger('actividads_id');
            $table->foreign('actividads_id')->references('id')->on('actividads');
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
        Schema::dropIfExists('empleados');
    }
}
