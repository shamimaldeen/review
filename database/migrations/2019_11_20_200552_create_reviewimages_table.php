<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewimagesTable extends Migration
{
   
    public function up()
    {
        Schema::create('review_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('review_image',100);
            $table->unsignedBigInteger('review_id');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('reviewimages');
    }
}
