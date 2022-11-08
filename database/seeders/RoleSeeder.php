<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin= Role::create(['name'=>'Administrador']);
        $dir= Role::create(['name'=>'Directivo']);
        Permission::create(['name' => 'home'])->assignRole([$admin]);
        Permission::create(['name' => 'departamentos'])->syncRoles([$admin]);

    }
}
