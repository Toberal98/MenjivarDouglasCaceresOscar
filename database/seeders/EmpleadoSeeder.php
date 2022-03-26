<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleados = [
            [
                'nombre' =>  'Oscar caceres',
                'edad' => '7777-7777',
                'sueldoBase' => 350,
                'codigoArea' => 1,
            ],
            [
                'nombre' =>  'Douglas criterio',
                'edad' => '7777-7777',
                'sueldoBase' => 500,
                'codigoArea' => 2,
            ],
            [
                'nombre' =>  'san portillo',
                'edad' => '7777-7777',
                'sueldoBase' => 700,
                'codigoArea' => 3,
            ],
            [
                'nombre' =>  'san portillo',
                'edad' => '7777-7777',
                'sueldoBase' => 1100,
                'codigoArea' => 4,
            ]
        ];
        foreach ($empleados as $emp) {
            Empleado::create($emp);
        }
    }
}
