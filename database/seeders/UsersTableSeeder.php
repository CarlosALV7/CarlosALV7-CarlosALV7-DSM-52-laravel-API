<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                 'name' => 'Josué'
                , 'primer_apellido' => 'Pacheco'
                , 'segundo_apellido' => 'Chávez'
                , 'fecha_nacimiento' => '2000-12-07'
                , 'sexo' => 'masculino'
                , 'email' => 'josuecheco02@gmail.com'
                , 'rol' => 'Administrador'
                , 'password' => bcrypt('12345678')
                , 'dias_visita' => null
                , 'estatus' => 'activo'
                , 'created_at' => '2022-02-26 09:29:00'
                , 'updated_at' => '2022-02-26 09:29:00'
            ]
        ]);
    }
}
