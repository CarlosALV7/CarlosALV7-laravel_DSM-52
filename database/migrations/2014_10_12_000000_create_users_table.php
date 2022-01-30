<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('ID de usuarios');
            $table->string('name', 100)->comment('Nombre completo de usuario');;
            $table->string('email', 100)->unique()->comment('Correo de usuario');;
            $table->timestamp('email_verified_at')->nullable()->comment('Fecha/nora verificacion de correo');
            $table->string('password', 200)->comment('Contraseña de usuario');;
            $table->rememberToken()->comment('¿Recordar token?');;
            $table->enum('estatus', ['Activo', 'Inactivo'])->default('Activo')->comment('Estatus del registro');;
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
        Schema::dropIfExists('users');
    }
};
