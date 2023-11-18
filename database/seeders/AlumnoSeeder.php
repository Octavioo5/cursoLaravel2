<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::create([
            'nombre'  => 'octavio',
            'edad'  => '18',
            'numero_control'  => '21325016',
            'sexo'  => '1'
        ]);
    }
}
