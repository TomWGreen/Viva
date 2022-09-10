<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseController extends Component
{
    public function render()
    {
        $courses = Course::all();

        $documents = $courses->documents();

        dd($documents);

        return view('livewire.course-controller');
    }
}
