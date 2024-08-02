<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeekerReg extends Model
{
    use HasFactory;
    

    protected $fillable=[
        'name',
        'address',
        'city',
        'email',
        'mobile',
        'qualification',
        'gender',
        'birth_date',
        'resume',
        'status',
        'usernam',
        'password',

    ];
}
