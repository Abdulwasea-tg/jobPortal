<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerReg extends Model
{
    use HasFactory;
    protected $fillable=[
        'company_name',
        'contact_person',
        'address',
        'city',
        'email',
        'mobile',
        'area_work',
        'status',
        'usernam',
        'password',

    ];
}
