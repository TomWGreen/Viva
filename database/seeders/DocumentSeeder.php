<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Document;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::create([
            'name' => 'Advanced Au Pair and Night Nursing Certificate',
            'content' => 'Dynamic',
            'blade_name' => '?',
            'priority' => '10'
        ]);

        Document::create([
            'name' => 'Elderly Care Assistant Certificate',
            'content' => 'Dynamic',
            'blade_name' => '?',
            'priority' => '11'
        ]);

        Document::create([
            'name' => 'Special Needs Certificate',
            'content' => 'Dynamic',
            'blade_name' => '?',
            'priority' => '12'
        ]);

        Document::create([
            'name' => 'Craft and Activities Certificate',
            'content' => 'Dynamic',
            'blade_name' => '?',
            'priority' => '13'
        ]);

        Document::create([
            'name' => 'Assistant Chef Certificate',
            'content' => 'Dynamic',
            'blade_name' => '?',
            'priority' => '14'
        ]);

        Document::create([
            'name' => 'First Aid Certificate',
            'content' => 'Dynamic',
            'blade_name' => '?',
            'priority' => '20'
        ]);

        Document::create([
            'name' => 'Work Experience Letter',
            'content' => 'Dynamic',
            'blade_name' => '?',
            'priority' => '30'
        ]);

        Document::create([
            'name' => 'Student Assessment Sheet',
            'content' => 'Dynamic',
            'blade_name' => '?',
            'priority' => '40'
        ]);

        Document::create([
            'name' => 'Childcare Log in for practicals',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '50'
        ]);

        Document::create([
            'name' => 'Elderly Care Log in for practicals',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '51'
        ]);

        Document::create([
            'name' => 'Special Needs Log in for practicals',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '52'
        ]);

        Document::create([
            'name' => 'Craft and Activities Log in for practicals',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '53'
        ]);

        Document::create([
            'name' => 'Chef Log in for practicals',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '54'
        ]);

        Document::create([
            'name' => 'Look and Learn example Childcare',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '60'
        ]);

        Document::create([
            'name' => 'Look and Learn example Elderly Care',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '61'
        ]);

        Document::create([
            'name' => 'Childcare CV template',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '70'
        ]);

        Document::create([
            'name' => 'Elderly CV template',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '71'
        ]);

        Document::create([
            'name' => 'Special Needs CV template',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '72'
        ]);

        Document::create([
            'name' => 'Craft CV template',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '73'
        ]);

        Document::create([
            'name' => 'Chef CV template',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '73'
        ]);

        Document::create([
            'name' => 'Testimonial',
            'content' => 'Dynamic',
            'blade_name' => '?',
            'priority' => '80'
        ]);

        Document::create([
            'name' => 'Student Practicals and job marketing',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '90'
        ]);

        Document::create([
            'name' => 'Chef student practicals and job marketing',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '91'
        ]);

        Document::create([
            'name' => 'Uniforms',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '92'
        ]);

        Document::create([
            'name' => 'Venues List',
            'content' => 'Static',
            'blade_name' => '?',
            'priority' => '93'
        ]);

    }
}
