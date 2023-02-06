<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $fillable = ['college_id','firstname','lastname','collegeemail','personalemail','phonenumber','registrationdate','status'];
    

}
