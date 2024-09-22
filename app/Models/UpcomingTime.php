<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UpcomingTime extends Model
{
    use HasFactory;

    /**
     * Get the upcoming that owns the UpcomingTime
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function upcoming(): BelongsTo
    {
        return $this->belongsTo(Upcoming::class);
    }
}
