<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        return view("./empleados/index",compact('empleados'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
