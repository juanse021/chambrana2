<?php

namespace App\Http\Controllers;

use App\Ingrediente;
use App\Producto;
use App\Receta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mockery\Exception;

class recetaCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ingredientes = Ingrediente::all();
        $recetas = Receta::all();
        return view('agregar_receta')->with([
                'ingredientes' => $ingredientes,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $input = $request->all();

            $request->validate([
                'ingrediente' => 'required',
                'nombre_producto' => 'required',
                'cantidad' => 'required',
                'precio' => 'required',
            ]);
            $ingredientes = $input['ingrediente'];
            $cantidades = $input['cantidad'];
            $producto = Producto::create([
                'nombre' => $input['nombre_producto'],
                'precio' => $input['precio']
            ]);
            //dd($producto);
            foreach ($ingredientes as $key => $ingrediente){
                Receta::create([
                    'id_producto' => $producto->id,
                    'id_ingrediente' => $ingrediente,
                    'cantidad' => $cantidades[$key]
                ]);
            }
            return redirect()->route('home');
        }
        catch ( Exception $e){
            return "Cantidad es obligatorio";
        }

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
