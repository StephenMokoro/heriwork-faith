<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship_job extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $fillable = ['ijob_title','employer_auto_id', 'ijob_skills', 'intern_skills', 'ijob_size', 'ijob_task', 'ijob_task_run', 'ijob_budget_currency', 'ijob_budget_amount', 'ijob_category'];


    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}

