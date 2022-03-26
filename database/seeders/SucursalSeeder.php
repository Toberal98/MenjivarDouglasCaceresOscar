<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sucursal;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sucursales = [
            [
                'nombre' =>  'san portillo',
                'direccion' => 'colonia san portillo'
            ],
            [
                'nombre' =>  'san bernardo',
                'direccion' => 'colonia san bernardo'
            ],
            [
                'nombre' =>  'san arnulfo',
                'direccion' => 'colonia san arnulfo'
            ],
            [
                'nombre' =>  'san sebastian',
                'direccion' => 'colonia san sebastian'
            ],
        ];
        foreach ($sucursales as $suc) {
            Sucursal::create($suc);
        }
    }
}
