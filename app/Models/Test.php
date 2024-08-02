<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory;
    use SoftDeletes;
    //custom softdelete col name
    //const DELETED_AT = 'my_soft_delete';


    protected $fillable = [
        'name',
        'content',
        /* 'data', */
    ];

    //controll attr/col value
    public function getCreatedAtAttribute($value){
        return date('M d, Y', strtotime($value));
    }
    public function getUpdatedAtAttribute($value){
        return date('M d, Y', strtotime($value));
    }
}
