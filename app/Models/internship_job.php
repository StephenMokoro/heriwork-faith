<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internship_job extends Model
{
    use HasFactory;
    protected $primarykey = 'ijob_auto_id';
    protected $fillable =['ijob_title','ijob_skills','ijob_size','ijob_task','ijob_task_run','ijob_budget_currency','ijob_budget_amount','ijob_desc'];


}
