<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function review_image()
    {
        return $this->hasMany(Reviewimage::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


    public function reviewer()
    {
        return $this->belongsTo(Reviewer::class);
    }


    public function reply()
    {
        return $this->hasMany(Reply::class);
    }


    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}