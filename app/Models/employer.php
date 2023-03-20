<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Employer extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey ='employer_auto_id';
    protected $fillable =['employer_first_name','employer_last_name','password','employer_phone','personal_email','status','email_verified_at'];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
