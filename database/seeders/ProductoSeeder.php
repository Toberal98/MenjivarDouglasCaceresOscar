<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $productos = [
            [
                'nombre' =>  'Cuaderno',
                'descripcion' => 'Cuadernos doble ralla.',
                'precio_unitario' => 1,
                'existencias' => 200,
                'garantia' => '2 meses',
                'id_vendedor' => 1
            ],
            [
                'nombre' =>  'Cuaderno',
                'descripcion' => 'Cuadernos doble ralla.',
                'precio_unitario' => 1,
                'existencias' => 200,
                'garantia' => '2 meses',
                'id_vendedor' => 2
            ],
            [
                'nombre' =>  'Cuaderno',
                'descripcion' => 'Cuadernos doble ralla.',
                'precio_unitario' => 1,
                'existencias' => 200,
                'garantia' => '2 meses',
                'id_vendedor' => 3
            ],
            [
                'nombre' =>  'Cuaderno',
                'descripcion' => 'Cuadernos doble ralla.',
                'precio_unitario' => 1,
                'existencias' => 200,
                'garantia' => '2 meses',
                'id_vendedor' => 4
            ],
          
        ];
        foreach ($productos as $pro) {
            Producto::create($pro);
        }
    }
}
