<?php

namespace App\Models;

use App\Notifications\CompanyResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
        'company_name', 'description', 'website', 'phone', 'address', 'image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CompanyResetPassword($token));
    }


    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}