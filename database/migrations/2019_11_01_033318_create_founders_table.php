<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoundersTable extends Migration
{
   
    public function up()
    {
        Schema::create('founders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('designation');
            $table->string('image')->nullabl();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('founders');
    }
}
