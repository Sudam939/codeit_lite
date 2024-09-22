<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Upcoming extends Model
{
    use HasFactory;

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get all of the upcoming_times for the Upcoming
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function upcoming_times(): HasMany
    {
        return $this->hasMany(UpcomingTime::class);
    }
}
