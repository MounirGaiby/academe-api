<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'title', 'description', 'credits', 'capacity', 'schedule'];
    protected $casts = ['schedule' => 'array'];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'enrollments')
            ->withPivot('enrollment_date', 'grade')
            ->withTimestamps();
    }

    public function hasAvailableSpots()
    {
        return $this->enrollments()->count() < $this->capacity;
    }
}
