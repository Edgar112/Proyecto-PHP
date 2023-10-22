<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //La tabla que se va generar: clientes
        Schema::create('clientes', function (Blueprint $table) {
            //Método que crea la columna Id como entero y autoincrementable
            $table->id('clienteId');
            $table->string('nombre',60);
            $table->string('apellido',100);
            $table->string('dni');
            $table->date('fregistro');
            $table->integer('celular');
            $table->string('direccion');
            $table->string('correo',100)->nullable();
            
            //Método que crea 2 columnas: create_at y update_at
            $table->timestamps();
        });
    }

    public function down(): void
    {
        //Eliminación de la tabla clientes
        Schema::dropIfExists('clientes');
    }
};