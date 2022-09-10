<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Advanced Au Pair and Night Nursing Course',
        ]);

        $course = Course::find(1);
        $course->documents()->attach([1, 6, 7, 8, 9, 14, 16, 21, 24, 25]);

        Course::create([
            'name' => 'Elderly Care Assistant Course',
        ]);

        $course = Course::find(2);
        $course->documents()->attach([2, 6, 7, 8, 10, 15, 17, 21, 24, 25]);

        Course::create([
            'name' => 'Special Needs Course',
        ]);

        $course = Course::find(3);
        $course->documents()->attach([3, 6, 7, 8, 11, 16, 17, 21, 24, 25]);

        Course::create([
            'name' => 'Craft and Activities Course',
        ]);

        $course = Course::find(4);
        $course->documents()->attach([4, 6, 7, 8, 12, 16, 21, 24, 25]);

        Course::create([
            'name' => 'Assistant Chef Course',
        ]);

        $course = Course::find(5);
        $course->documents()->attach([5, 6, 7, 8, 13, 16, 21, 24, 25, 23]);

   }
}
