<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;
    protected $primaryKey = 'student_auto_id';
    
    protected $fillable = [ 'student_first_name', 'student_last_name', 'student_email','student_phone','upload_cv','progress_report','password','institution_id', 'country','school_name','student_gender',  'student_status'];
}
