<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateCompaniesRatingView extends Migration
{

    public function up()
    {
        // DB::statement("create view companies_rating as  select company_id, sum(rating) as total_rating from reviews GROUP by company_id");
    }


    public function down()
    {
        //DB::statement("drop view if exists companies_rating");
        Schema::dropIfExists('company_rating_view');
    }
}