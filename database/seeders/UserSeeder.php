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
            'name'=>'Rolando Castro',
            'email'=>'racastrog@itsjapon.edu.ec',
            'cedula'=>'1719420968',
            'password'=>bcrypt('12341234')
        ])->assignRole('Administrador');
        User::create([
            'name'=>'Daniel Cabrera',
            'email'=>'dcabrera@itsjapon.edu.ec',
            'cedula'=>'1718172615',
            'password'=>bcrypt('12341234')
        ])->assignRole('Directivo');
        // User::factory(9)->create();
}
}