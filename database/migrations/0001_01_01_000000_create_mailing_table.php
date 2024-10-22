<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{    
    public function up(): void
    {
        Schema::create('mailing', function (Blueprint $table) {
            $table->id();  
            $table->unsignedBigInteger('mails_id');      
            $table->foreign('mails_id')->references('id')->on('mails')->onDelete('cascade');
            $table->date('fecha_de_envio')->nullable();            
            $table->timestamps();
        });   

       
    }
    
};
