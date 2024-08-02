<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Education;

class Seeker extends Model
{
    use HasFactory;
    protected $table = 'jobseeker_reg';
    protected $primaryKey = 'JobseekId';
    //protected $foreignKey = 'JobId';
    //protected $foreignPivotKey = 'JobId';


    protected $fillable =[
        'JobSeekId',
        'JobSeekerName', 
        'Address',
        'City',
        'Email',
        'Mobile',
        'Qualification',
        'Gender', 
        'BirthDate', 
        'Resume', 
        //'Status', 
        'UserName', 
        /* 'Password', 
        'Question', 
        'Answer', */
    ];

    public $timestamps =false;

    public function educations(){
        return $this->hasMany(Education::class, 'JobSeekId', 'JobSeekId');
    }

    public function jobs(){
        //return $this->belongsToMany(Job::class,'application_master','JobSeekId','jobs_id');->withPivot(['Status', 'Description'])
        return $this->belongsToMany(Job::class,'application_master', 'JobSeekId', 'Jobs_id', 'JobSeekId')->withPivot(['Status', 'Description']);
    }

    public function documents(){
        return $this->hasMany(Document::class, 'JobSeekId', 'JobSeekId');
    }

    public function feedbacks(){
        return $this->hasMany(Feedback::class, 'JobSeekId', 'JobSeekId');
    }

    


}
