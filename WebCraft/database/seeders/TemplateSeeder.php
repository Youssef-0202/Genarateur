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
                'nom' => 'iLanding',
                'description' => 'Learning is a modern, responsive template.',
                'image' => 'templates/images/templateOne.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Restoran',
                'description' => 'Enjoy your delicious meal with a variety of dishes.',
                'image' => 'templates/images/restoran.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Cosa Store',
                'description' => 'New Season Jackets & Coats. Shop the latest styles.',
                'image' => 'templates/images/coza_store.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'eLearning',
                'description' => 'The Best Online Learning Platform. View our courses.',
                'image' => 'templates/images/elearning.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
