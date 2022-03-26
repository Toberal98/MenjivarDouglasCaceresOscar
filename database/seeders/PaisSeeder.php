<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pais;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paises = [
            [
                'nombre' =>  'El salvador'
            ],
            [
                'nombre' =>  'Nicaragua'
            ],
            [
                'nombre' =>  'Costa rica'
            ],
            [
                'nombre' =>  'Panama'
            ],
        ];
        foreach ($paises as $pais) {
            Pais::create($pais);
        }
    }
}
