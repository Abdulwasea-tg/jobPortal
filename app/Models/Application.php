<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Application extends Pivot
{
    use HasFactory;
    protected $table='application_master';

    protected $fillable =[
        'JobSeekId',
        'JobId',
        'Status',
        'Description',

    ];


}
