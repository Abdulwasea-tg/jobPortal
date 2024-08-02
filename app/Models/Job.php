<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    //protected $table = 'job_master';
    //protected $guarded=[];
    protected $primaryKey = "id";
    protected $foreignKey = "employer_id";
    protected $fillable = [
        "id",
        "CompanyName",
        "JobTitle",
        "Address",
        "Vacancy",
        "MinQualification",
        "Description",  
        "employer_id"       
    ];

    protected $timestamp=false;

   /*  protected $hidden=[

    ] */

    public function getCreatedAtAttribute($value){
        return date("H", strtotime($value)).' hours ago';
    }

    function employer()
    {
        return $this->belongsTo(Employer::class, "employer_id", "EmployerId");
    }

    public function seekers(){
        return $this->belongsToMany(Seeker::class,'application_master', 'Jobs_id', 'JobSeekId')->withPivot(['Status', 'Description']);
    }

}




