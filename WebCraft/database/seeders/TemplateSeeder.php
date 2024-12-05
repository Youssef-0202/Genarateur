<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('templates')->insert([
            [
                'nom' => 'eLearning',
                'description' => 'Designed for educational platforms, this template highlights courses, instructors, and online learning events.',
                'image' => 'templates/images/elearning.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Restoran',
                'description' => 'A modern and appetizing design for restaurants and culinary businesses. Showcase your delicious dishes and enable easy table bookings online.',
                'image' => 'templates/images/restoran.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Cosa Store',
                'description' => 'A versatile and clean template for all types of online stores. Showcase your products and provide a seamless shopping experience for your customers.',
                'image' => 'templates/images/coza_store.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'MediCare',
                'description' => 'An ideal template for healthcare providers and clinics. Promote your medical services and enhance communication with patients.',
                'image' => 'templates/images/orthoc.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
