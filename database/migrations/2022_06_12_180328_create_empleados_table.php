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
            $table->engine="InnoDB";
            $table->id();
            $table->string('nombres')->nullable(false);
            $table->string('apellidos')->nullable(false);
            $table->string('identificacion')->nullable(false);
            $table->string('direccion')->nullable(false);
            $table->string('telefono')->nullable(false);
            $table->string('correo')->unique();
            $table->timestamps();

            $table->unsignedBigInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('tipo_direccion_id');
            $table->foreign('tipo_direccion_id')->references('id')->on('tipo_direccions')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('genero_id');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('cargo_id');
            $table->foreign('cargo_id')->references('id')->on('cargos')->onDelete('cascade')->onUpdate('cascade');

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
