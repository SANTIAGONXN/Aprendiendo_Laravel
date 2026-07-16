<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
             $table->id('idEmpleado');
            $table->unsignedBigInteger('iddepartamento');
            $table->unsignedBigInteger('idciudad');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('direccion', 100)->nullable(); /* Es para que no sea obigatorias */
            $table->string('email', 100);
            $table->string('estado', 20);
            $table->date('fechaingreso');
            $table->date('fecharetiro')->nullable();
            $table->decimal('sueldo',12,2);
            $table->timestamps();

            $table->foreign('idCiudad')
            ->references('idCiudad')
            ->on('ciudades');

             $table->foreign('idDepartamento')
            ->references('idDepartamento')
            ->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
