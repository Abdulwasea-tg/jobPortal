<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = "feedback";
    protected $primaryKey = "FeedbackId";
    protected $fillable = [
        "FeedbackId",
        "JobSeekId",
        "Feedback",
        "created_at",
    ];

    public function seeker()
    {
        return $this->belongsTo(Seeker::class, "JobSeekId", "JobSeekId");
    }
}
