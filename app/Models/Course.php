<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    /**
     * Get all of the class_groups for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function class_groups(): HasMany
    {
        return $this->hasMany(ClassGroup::class);
    }

    /**
     * Get all of the upcomings for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function upcomings(): HasMany
    {
        return $this->hasMany(Upcoming::class);
    }
}
