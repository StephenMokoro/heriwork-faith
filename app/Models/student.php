<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;
    protected $primaryKey = 'student_auto_id';
    protected $fillable = ['others', 'institution_id', 'school_name', 'student_first_name', 'student_last_name', 'password', 'student_phone', 'student_email', 'student_status'];
}
