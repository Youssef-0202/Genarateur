<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Créer un utilisateur spécifique
        User::create([
            'name' => 'Chaimaa El Affas',
            'email' => 'chaimaaelaffas@gmail.com',
            'password' => bcrypt('password123'), // Assurez-vous de hasher le mot de passe
        ]);


    }
}
