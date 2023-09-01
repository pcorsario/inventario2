<?php
//php artisan db:seed --class=SeederTablaPermisos
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
    //Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        //
        $permisos=[
            //Tabla Roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Tabla Productos
            'ver-producto',
            'crear-producto',
            'editar-producto',
            'borrar-producto',
            'ver-precio',
        ];
        foreach ($permisos as $permiso) {
            # code...
            Permission::create(['name'=>$permiso]);
        }
    }
}
