<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'jobseeker_education';
    protected $primaryKey = 'EduId';
    protected $foreignKey = 'JobSeekId';

    protected $fillable = [
        'EduId',
        'Degree',
        'University', 
        'PassingYear',
        'Percentage', 
        'JobSeekId', 
    ];

    public $timestamps=false;

    public function seeker()
    {
        return $this->belongsTo(Seeker::class, 'JobSeekId');
    }

}
