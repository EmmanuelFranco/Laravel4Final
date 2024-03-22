<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'Emmanuel Franco Delgado',
        'email' => 'emmanuel@gmail.com',
        'password' => Hash::make('123456789') ])->assignRole('Admin');


        User::create(['name' => 'Harold ',
        'email' => 'harold@gmail.com',
        'password' => Hash::make('123456789') ])->assignRole('Editor');
    }
}
