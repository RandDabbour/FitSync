<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutLog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
       'user_id',
    'name',
    'description',
    'type',
    'duration',
    'calories_burned',
    'distance',
    'sets',
    'reps',
    'weight',
    'date',
    ];

    /**
     * Relationship: User associated with the workout log.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship: Subscription associated with the workout log.
     */
    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    /**
     * Relationship: Trainer associated with the workout log.
     */
    public function trainer()
    {
        return $this->belongsTo(User::class, 'trainer_id');
    }
}
