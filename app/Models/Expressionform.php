<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expressionform extends Model
{
    use HasFactory;
    protected $fillable =['school_name','student_first_name','student_last_name','student_email','student_phone'];
}
