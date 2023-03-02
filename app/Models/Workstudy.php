<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workstudy extends Model
{
    use HasFactory;
    protected $primaryKey ='workstudy_id';
    protected $fillable =['employer_id','ws_title','ws_job_desc','ws_job_pay_per_hour','ws_job_expected_start_date','ws_job_expected_end_date','ws_status'];
    
}
