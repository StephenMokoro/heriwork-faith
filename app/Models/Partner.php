<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    
    protected $fillable =['partner_first_name','partner_last_name','hear_us','company_size','role','country','partner_email','partner_phone','partner_type','company_name','company_type','company_size','role','company_address','brief_desc','contact','add_note','web_link'];

    // protected $fillable =['company_name','company_email','company_category','social_link','social_url'];
}
