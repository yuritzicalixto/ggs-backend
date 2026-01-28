<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // 1. Primero se crea permisos y roles
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
        ]);

        // Usuarios de prueba
        //Admin
        User::factory()->create([
            'name' => 'Calixto',
            'email' => 'calixtoyuallix@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('admin');

        // Stylist de prueba
        User::factory()->create([
            'name' => 'Estilista',
            'email' => 'stylist@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('stylist');

        // Client de prueba
        User::factory()->create([
            'name' => 'Cliente',
            'email' => 'client@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('client');


        // $this->call([
        //     PermissionSeeder::class,
        //     RoleSeeder::class,
        // ]);
    }
}
