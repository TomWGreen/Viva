<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Document;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Get the documents for the course.
     */
    public function documents()
    {
        return $this->belongsToMany(Document::class, 'course_documents');
    }

}
