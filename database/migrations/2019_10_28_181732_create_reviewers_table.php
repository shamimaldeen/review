<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewersTable extends Migration
{

    public function up()
    {
        Schema::create('reviewers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('title')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact')->nullable();
            $table->string('city')->nullable();
            $table->unsignedBigInteger('country_id')->default(18);
            $table->string('image')->nullable();
            $table->rememberToken();
            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropForeign('country_id');
        Schema::drop('reviewers');
    }
}