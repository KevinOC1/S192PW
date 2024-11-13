<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Clientes')->insert([
            [
                'nombre'=>'Kevin',
                'apellido'=>'Ordaz',
                'correo'=>'kioc@gmail.com',
                'telefono'=>'1234567891'
            ],
            [
                'nombre'=>'Gerson',
                'apellido'=>'Patrana',
                'correo'=>'Pastrana@gmail.com',
                'telefono'=>'1234567892'  
            ],
            [
                'nombre'=>'Ivan',
                'apellido'=>'Guerra',
                'correo'=>'Guerra@gmail.com',
                'telefono'=>'1234567893'
            ]]);
       }
}
