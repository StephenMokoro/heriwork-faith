<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends   Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'student_auto_id';
    
    protected $fillable = [ 'student_first_name', 'student_last_name', 'student_email','student_phone','password','institution_id', 'country','school_name','student_gender',  'student_status','student_email_verified'];
}

