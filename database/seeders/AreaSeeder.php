<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = [
            [
                'nombre' =>  'san portillo',
                'telefono' => '7777-7777',
                'codigoSucursal' => 1
            ],
            [
                'nombre' =>  'san portillo',
                'telefono' => '7777-7777',
                'codigoSucursal' => 2
            ],
            [
                'nombre' =>  'san portillo',
                'telefono' => '7777-7777',
                'codigoSucursal' => 3
            ],
            [
                'nombre' =>  'san portillo',
                'telefono' => '7777-7777',
                'codigoSucursal' => 4
            ],
        ];
        foreach ($areas as $ar) {
            Area::create($ar);
        }
    }
}
