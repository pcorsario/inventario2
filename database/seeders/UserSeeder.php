<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Patricio Vaca Escobar',
            'email'=>'pvaca@itsjapon.edu.ec',
            'cedula'=>'1718102815',
            'password'=>bcrypt('12341234')
        ])->assignRole('Administrador');
        User::create([
            'name'=>'Rolando Castro',
            'email'=>'rcastro@itsjapon.edu.ec',
            'cedula'=>'1723146419',
            'password'=>bcrypt('12341234')
        ])->assignRole('Directivo');
        // User::factory(9)->create();
}
}