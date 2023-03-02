<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
    protected $primaryKey ='organization_auto_id';
    protected $fillable = ['organization_name','org_email_format','organization_status'];
    
}
