<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'identification_type',
        'identification_number'
    ];

    /**
     * Get the courses for the student.
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses');
    }
}
