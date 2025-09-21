<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmasTable extends Migration
{
    public function up()
    {
        Schema::create('umas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');      
            $table->string('trainer');  
            $table->unsignedBigInteger('harga'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('umas');
    }
}
