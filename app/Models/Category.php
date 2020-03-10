<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name', 'image'];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function reviews()
    {
        return $this->hasManyThrough(Review::class, Company::class);
    }
}