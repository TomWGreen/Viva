<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'first_name' => 'Peter',
            'last_name' => 'Piper',
            'email' => 'PeterPiper@b.com',
            'identification_type' => 'ID',
            'identification_number' => '8401015054088',
        ]);

        Student::create([
            'first_name' => 'Mary',
            'last_name' => 'Magdalene',
            'email' => 'mm@z.com',
            'identification_type' => 'Passport',
            'identification_number' => 'ZA9988765',
        ]);

        Student::create([
            'first_name' => 'Billy Bob',
            'last_name' => 'Thornton',
            'email' => 'BBThornton@b.com',
            'identification_type' => 'Asylum',
            'identification_number' => NULL,
        ]);

    }
}
