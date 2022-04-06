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
        Schema::create('usuarios', function (Blueprint $table) {
           
            $table->increments('id_usuario');
            $table->string('nome');    
            $table->string('email')->unique();            
            $table->enum('perfil',['Administrador', 'Utente', 'Pessoal_clinico']);        
            $table->string('senha');                            
            $table->rememberToken();        
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
        Schema::dropIfExists('usuarios');
    }
};
