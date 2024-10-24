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
        Schema::create('mails', function (Blueprint $table) {
            $table->id();            
            $table->string('email')->unique();
            $table->string('ciudad');
            $table->string('Persona');
            $table->date('fecha_de_envio')->nullable();  
            $table->boolean('habilitado')->default(true);          
            $table->timestamps();
        });  

       
    }
    public function down()
    {
        Schema::dropIfExists('mails');
    }
    
};
