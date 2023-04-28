<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('origen_id')->nullable();
            $table->foreignId('numero_id')->nullable();
            $table->foreignId('conversacion_id')->nullable();
            $table->string('plantilla')->nullable();
            $table->enum('tipo', ['enviado', 'recibido'])->default('enviado');
            $table->string('mensaje')->nullable();
            $table->string('enviado')->nullable();
            $table->string('visto')->nullable();
            $table->datetime('fecha_mensaje')->nullable();
            $table->datetime('fecha_visto')->nullable();
            $table->string('codigo');
            $table->softDeletes();
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
        Schema::dropIfExists('mensajes');
    }
}
