<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol1 = Role::create(['name' => 'Admin']);
        $rol2 = Role::create(['name' => 'Editor']);

        Permission::create(['name'=> 'crearUsuario'])->syncRoles($rol1);
        Permission::create(['name'=> 'editarUsuario'])->syncRoles($rol1,$rol2);
        Permission::create(['name'=> 'crearPagina'])->syncRoles($rol1);
        Permission::create(['name'=> 'editarPagina'])->syncRoles($rol1,$rol2);
        
    }
}
