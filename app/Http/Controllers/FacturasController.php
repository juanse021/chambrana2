<?php

namespace App\Http\Controllers;

use App\Contabilidad;
use App\Detalle;
use App\Factura;
use App\Log;
use App\Mesa;
use App\Producto;
use App\Receta;
use App\Unidad;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $contabiliad = Contabilidad::where('fecha', date('Y-m-d'))->get()->first();
        if($contabiliad){
            if($contabiliad->abierto == 0){
                //abort(410);
                $contabiliad->abierto = 1;
                $contabiliad->save();
            }
        }

    }


    public function index(){
        $facturas = Factura::where('esta_pago', 1)->get();
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
            DB::beginTransaction();
            $input = $request->all();
            $factura = Factura::findOrFail($input['id_factura']);
            $producto = Producto::findOrFail($input['producto']);
            $cantidad = (int) $input['cantidad'];
            $ingredientes = $producto->ingredientes;
            $cant = $producto->cantidad;
            for ($i = 0; $i < $cantidad; $i++) {
                foreach ($ingredientes as $ingrediente) {
                    $unidades = $ingrediente->unidades;

                    $receta = Receta::where([
                        ['id_producto', $producto->id],
                        ['id_ingrediente', $ingrediente->id]
                    ])->get()->first();
                    if($ingrediente->cantidad() < $cantidad * $receta->cantidad){
                        $rtAjax['ok'] = false;
                        $rtAjax['error'] =  'no hay suficiente inventario de ' . $ingrediente->nombre ;
                        return $rtAjax;
                    }

                }
            }
            $i = 0;
            foreach ($ingredientes as $ingrediente){

                $receta = Receta::where([
                    ['id_producto', $producto->id],
                    ['id_ingrediente', $ingrediente->id]
                ])->get()->first();

            }
            $detalle = Detalle::create([
                'id_factura' => $factura->id,
                'id_producto' => $producto->id,
                'cantidad' => $cantidad,
            ]);
            $factura->total += $producto->precio * $cantidad;
            $factura->save();

            $productos = $factura->detalle;
            foreach ($productos as $producto){
                $cant = $producto->cantidad;
                for ($i = 0; $i < $cant; $i++) {
                    $ingredientes = $producto->producto->ingredientes;
                    foreach ($ingredientes as $ingrediente) {
                        $unidades = $ingrediente->unidades;
                        $contar = 0;
                        foreach ($unidades as $uni){
                            $contar += $uni->cantidad;
                        }

                        $receta = Receta::where([
                            ['id_producto', $producto->producto->id],
                            ['id_ingrediente', $ingrediente->id]
                        ])->get()->first();
                        if($ingrediente->cantidad() < $cant * $receta->cantidad){
                            $rtAjax['ok'] = false;
                            DB::rollBack();
                            $rtAjax['error'] =  'no hay suficiente inventario de ' . $ingrediente->cantidad() . ' ' . $cant * $receta->cantidad ;
                            return $rtAjax;
                        }

                    }
                }
            }
            $rtAjax['ok'] = true;
            DB::commit();
        }
        catch(\Exception $e){
            $rtAjax['ok'] = false;
            $rtAjax['error'] = $e . '';
        }
        return $rtAjax;

    }

    public function eliminarProducto(Request $request){
        $input = $request->all();
        $rtAjax = [
            'ok' => true,
            'error' => ''
        ];
        try{
            $factura = Factura::find($input['id_factura']);

            $detalle = Detalle::where([
                ['id_factura', $factura->id],
                ['id_producto', $input['id_producto']]
            ])->get()->first();

            $costo = $detalle->cantidad * $detalle->producto->precio;
            $factura->total = $factura->total - $costo;
            $factura->save();
            $detalle->delete();
            $log = Log::create([
                'id_usuario' => Auth::user()->id,
                'accion' => 'Eliminar Producto de pedido',
                'expl' => $input['expl'],
            ]);
            return $rtAjax;
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

        $input = $request->all();
        DB::beginTransaction();
            foreach ($productos as $producto){
                $cant = $producto->cantidad;
                for ($i = 0; $i < $cant; $i++) {
                    $ingredientes = $producto->producto->ingredientes;
                    foreach ($ingredientes as $ingrediente) {
                        $unidades = $ingrediente->unidades;
                        $contar = 0;
                        foreach ($unidades as $uni){
                            $contar += $uni->cantidad;
                        }

                        $receta = Receta::where([
                            ['id_producto', $producto->producto->id],
                            ['id_ingrediente', $ingrediente->id]
                        ])->get()->first();
                        if($contar < $cant * $receta->cantidad){
                            DB::rollBack();
                            return back()->withErrors(['msg' => 'No hay suficiente ' . $ingrediente->nombre]);
                        }
                        if (count($unidades) > 0) {
                            $unidades[0]->cantidad -= (int)$receta->cantidad;
                            $unidades[0]->save();
                            if ($unidades[0]->cantidad <= 0) {
                                $unidad_eliminar = Unidad::find($unidades[0]->id);
                                $unidad_eliminar->delete();
                            }
                        }

                    }
                }
            }

        $permiso = $request->get('permiso');
        if(!is_null($permiso)){
            if($permiso){
                $factura->delete();
                DB::commit();
                return redirect()->route('caja');
            }
        }

            $factura->esta_pago = 1;
            $factura->save();
        DB::commit();
        return redirect()->route('caja');
    }
}
