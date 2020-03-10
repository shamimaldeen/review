<?php

namespace App\Models;

use App\Notifications\ReviewerResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Reviewer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ReviewerResetPassword($token));
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }


    
}
