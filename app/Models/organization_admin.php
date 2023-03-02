<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization_admin extends Model
{
    use HasFactory;
    protected $primaryKey ='org_admin_auto_id';
    protected $fillable = ['admin_first_name','admin_last_name','official_email','admin_password','admin_status'];
}
