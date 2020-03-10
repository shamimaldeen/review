<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{

    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('review_text');
            $table->string('rating', 3);
            $table->unsignedBigInteger('reviewer_id')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->foreign('reviewer_id')->references('id')->on('reviewers')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropForeign('reviewer_id');
        Schema::dropForeign('company_id');
        Schema::dropIfExists('reviews');
    }
}