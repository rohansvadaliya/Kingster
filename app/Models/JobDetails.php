<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobDetails extends Model
{
    protected $table = 'job_details';
    public $fillable = ['title', 'description', 'experience', 'salary', 'location', 'extra_info', 'company_name', 'logo', 'skills', 'status'];
}
