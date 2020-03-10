<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewImage extends Model
{
	protected  $fillable = array('review_image');

    public function reviews()
    {
        return $this->belongsTo(Review::class);
    }
}
