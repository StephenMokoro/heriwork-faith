<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class college_admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'apk1';
    protected $fillable =['uname','pwd','school_email','full_name','college_auto_id'];
    
}
