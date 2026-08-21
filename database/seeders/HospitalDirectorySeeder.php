<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Database\Seeder;

class HospitalDirectorySeeder extends Seeder
{
    /**
     * Seed a sample hospital directory for the website and appointment form.
     */
    public function run(): void
    {
        $departments = [
            ['name' => 'Cardiology', 'icon' => 'heart', 'description' => 'Heart, vascular and preventive cardiac care.', 'sort_order' => 1],
            ['name' => 'Orthopedics', 'icon' => 'bone', 'description' => 'Bone, joint, spine and sports injury treatment.', 'sort_order' => 2],
            ['name' => 'Neurology', 'icon' => 'brain', 'description' => 'Specialist care for brain, nerve and spine conditions.', 'sort_order' => 3],
            ['name' => 'Pediatrics', 'icon' => 'child', 'description' => 'Compassionate medical care for children and adolescents.', 'sort_order' => 4],
            ['name' => 'Obstetrics & Gynecology', 'icon' => 'mother-child', 'description' => 'Women’s health, maternity and reproductive care.', 'sort_order' => 5],
            ['name' => 'Gastroenterology', 'icon' => 'digestive', 'description' => 'Digestive, liver and nutrition care.', 'sort_order' => 6],
            ['name' => 'Dermatology', 'icon' => 'skin', 'description' => 'Medical, surgical and cosmetic skin care.', 'sort_order' => 7],
            ['name' => 'ENT', 'icon' => 'ear', 'description' => 'Ear, nose, throat, voice and hearing care.', 'sort_order' => 8],
        ];

        foreach ($departments as $department) {
            Department::updateOrCreate(
                ['name' => $department['name']],
                [...$department, 'is_active' => true],
            );
        }

        $doctors = [
            ['name' => 'Dr. Aarav Mehta', 'designation' => 'Senior Consultant Cardiologist', 'department' => 'Cardiology', 'experience' => '18 years', 'qualification' => 'MBBS, MD, DM Cardiology', 'sort_order' => 1],
            ['name' => 'Dr. Nisha Sharma', 'designation' => 'Consultant Orthopedic Surgeon', 'department' => 'Orthopedics', 'experience' => '14 years', 'qualification' => 'MBBS, MS Orthopedics', 'sort_order' => 2],
            ['name' => 'Dr. Vikram Rao', 'designation' => 'Senior Consultant Neurologist', 'department' => 'Neurology', 'experience' => '16 years', 'qualification' => 'MBBS, MD, DM Neurology', 'sort_order' => 3],
            ['name' => 'Dr. Priya Kapoor', 'designation' => 'Consultant Pediatrician', 'department' => 'Pediatrics', 'experience' => '12 years', 'qualification' => 'MBBS, MD Pediatrics', 'sort_order' => 4],
            ['name' => 'Dr. Kavita Joshi', 'designation' => 'Consultant Obstetrician & Gynecologist', 'department' => 'Obstetrics & Gynecology', 'experience' => '15 years', 'qualification' => 'MBBS, MS Obstetrics & Gynecology', 'sort_order' => 5],
            ['name' => 'Dr. Rohan Gupta', 'designation' => 'Consultant Gastroenterologist', 'department' => 'Gastroenterology', 'experience' => '13 years', 'qualification' => 'MBBS, MD, DM Gastroenterology', 'sort_order' => 6],
            ['name' => 'Dr. Ananya Sen', 'designation' => 'Consultant Dermatologist', 'department' => 'Dermatology', 'experience' => '11 years', 'qualification' => 'MBBS, MD Dermatology', 'sort_order' => 7],
            ['name' => 'Dr. Sameer Iyer', 'designation' => 'ENT Specialist', 'department' => 'ENT', 'experience' => '10 years', 'qualification' => 'MBBS, MS ENT', 'sort_order' => 8],
        ];

        foreach ($doctors as $doctor) {
            Doctor::updateOrCreate(
                ['name' => $doctor['name']],
                [...$doctor, 'is_active' => true],
            );
        }
    }
}
