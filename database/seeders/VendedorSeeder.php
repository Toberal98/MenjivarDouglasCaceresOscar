<?php

namespace Database\Seeders;

use App\Models\Vendedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $vendedores = [
            [
                'dui' =>  '05782688-9',
                'direccion' => 'Colonia algo por algo',
                'nit' => '7890-908967-109-9',
                'id_usuario' => 1,

            ],      
            [
                'dui' =>  '05782688-9',
                'direccion' => 'Colonia algo por algo',
                'nit' => '7890-908967-109-9',
                'id_usuario' => 1,

            ],  
            [
                'dui' =>  '05782688-9',
                'direccion' => 'Colonia algo por algo',
                'nit' => '7890-908967-109-9',
                'id_usuario' => 1,

            ],       
            [
                'dui' =>  '05782688-9',
                'direccion' => 'Colonia algo por algo',
                'nit' => '7890-908967-109-9',
                'id_usuario' => 1,

            ],
           
        ];
        foreach ($vendedores as $ven) {
            Vendedor::create($ven);
        }
    }
}
