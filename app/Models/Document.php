<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "tag",
        "type",
    ];

    public $timestamps = true;

    function getTypeAttribute($value)
    {
        return $value==0?"Resume":"Cover Letter";
    }

    public function seeker()
    {
        return $this->belongsTo(Seeker::class, "JobSeekId", "JobSeekId");
    }


}
