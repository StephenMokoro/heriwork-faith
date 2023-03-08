<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internship_job extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = ['employer_id', 'ijob_title', 'ijob_job_desc', 'ijob_categories', 'ijob_type', 'ijob_stipend', 'ijob_expected_start_date', 'ijob_expected_end_date', 'ijob_expected_daily_hours', 'ijob_pay_status', 'ijob_status'];
}
