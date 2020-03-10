<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->string('description');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('website');
            $table->string('phone');
            $table->string('image')->nullable()->default(null);
            $table->string('address');
            $table->tinyinteger('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
        Schema::dropForeign('category_id');
        Schema::dropForeign('package_id');
    }
}
