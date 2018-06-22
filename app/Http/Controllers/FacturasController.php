<?php

namespace App\Http\Controllers;

use App\Contabilidad;
use App\Detalle;
use App\Factura;
use App\Mesa;
use App\Producto;
use App\Receta;
use App\Unidad;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    //

    public function __construct()
    {
        $now = Carbon::now();
        $contabiliad = Contabilidad::where('fecha', date('Y-m-d'))->get();
        if(count($contabiliad) == 0){
            abort(410);
        }
    }


    public function index(){
        $facturas = Factura::all();
        return view('facturas')->with(
            [
                'facturas' => $facturas
            ]
        );
    }

    public function show($id){

        $factura = Factura::find($id);
        $detalles = $factura->detalle;
        return view('ver_factura')->with(
            [
                'factura' => $factura,
                'detalles' => $detalles
            ]
        );
    }
    public function mesas()
    {

        $mesas = Mesa::all();
        return view('cajamesas')->with(
            [
                'mesas' => $mesas
            ]
        );
    }

    public function abrirFactura($id)
    {
        $mesa = Mesa::findOrFail($id);
        $factura = Factura::where([
            ['id_mesa', $mesa->id],
            ['esta_pago', 0]
        ])->get()->first();
        if(is_null($factura)){

            $factura = Factura::create([
                'fecha' => date('Y-m-d H:i:s'),
                'id_mesa' => $mesa->id,
                'total' => 0.00,
                'esta_pago' => 0,
            ]);
        }

        $productos = Producto::all();

        $detalles = $factura->detalle;
        return view('factura')->with(
            [
                'factura' => $factura,
                'productos' => $productos,
                'detalles' => $detalles
            ]
        );
    }

    public function agregarProducto(Request $request)
    {
        $rtAjax = [
            'ok' => false,
            'error' => ''
        ];
        try{
            $input = $request->all();
            $factura = Factura::findOrFail($input['id_factura']);
            $producto = Producto::findOrFail($input['producto']);
            $cantidad = (int) $input['cantidad'];
            $ingredientes = $producto->ingredientes;
            $i = 0;
            foreach ($ingredientes as $ingrediente){

                $receta = Receta::where([
                    ['id_producto', $producto->id],
                    ['id_ingrediente', $ingrediente->id]
                ])->get()->first();
                if($ingrediente->cantidad() - $receta->cantidad <= 0){
                    $rtAjax['ok'] = false;
                    $rtAjax['error'] =  'no hay suficiente inventario de ' . $ingrediente->nombre;
                    return $rtAjax;
                }
            }
            $detalle = Detalle::create([
                'id_factura' => $factura->id,
                'id_producto' => $producto->id,
                'cantidad' => $cantidad,
            ]);
            $factura->total += $producto->precio * $cantidad;
            $factura->save();
            $rtAjax['ok'] = true;
        }
        catch(\Exception $e){
            $rtAjax['ok'] = false;
            $rtAjax['error'] = $e . '';
        }
        return $rtAjax;

    }

    public function pagar($id, Request $request){
        $factura = Factura::findOrFail($id);
        $productos = $factura->detalle;
        foreach ($productos as $producto){
            $ingredientes = $producto->producto->ingredientes;
            foreach ($ingredientes as $ingrediente){
                $unidades = $ingrediente->unidades;
                $receta = Receta::where([
                    ['id_producto', $producto->producto->id],
                    ['id_ingrediente', $ingrediente->id]
                ])->get()->first();
                if(count($unidades) > 0){
                    $unidades[0]->cantidad -= (int) $receta->cantidad;
                    $unidades[0]->save();
                    if($unidades[0]->cantidad <= 0){
                        $unidad_eliminar = Unidad::find($unidades[0]->id);
                        $unidad_eliminar->delete();
                    }
                }

            }
        }
        $factura->esta_pago = 1;
        $factura->save();
        return redirect()->route('caja');
    }
}
