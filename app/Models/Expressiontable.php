<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expressiontable extends Model
{
    use HasFactory;
    protected $fillable =['school_name','student_first_name','student_last_name','student_phone','student_email'];
    protected $primaryKey ='expression_id';
}
