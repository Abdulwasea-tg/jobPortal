<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employer_reg';
    protected $primaryKey = 'EmployerId';

    protected $fillable = [
        'CompanyName',
        'ContactPerson', 
        'Address', 
        'City', 
        'Email', 
        'Mobile', 
        'Area_Work', 
        'Status',
        'UserName', 
        'Password', 
        'Question', 
        'Answer',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class, "employer_id", "EmployerId");
    }

    public function jobSeeker()
    {
        return $this->hasManyThrough(Application::class, Job::class, "employer_id","jobs_id", "EmployerId", "id");
    }

    
}
