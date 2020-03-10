<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
   
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reply_text');
            $table->unsignedBigInteger('review_id');
            $table->unsignedBigInteger('company_id');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('replies');
        Schema::dropForeign('review_id');
        Schema::dropForeign('company_id');
    }
}
