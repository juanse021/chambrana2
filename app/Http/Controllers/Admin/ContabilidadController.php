<?php

namespace App\Http\Controllers\Admin;

use App\Contabilidad;
use App\Factura;
use App\Gasto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContabilidadController extends Controller
{
    //
    public function index(){
        $facturas = Factura::all();
        $gastos = Gasto::all();
        $total_fac = 0.0;
        $toal_gastos = 0.0;
        foreach ($facturas as $factura){
            $total_fac += $factura->total;
        }
        foreach ($gastos as $gasto){
            $toal_gastos += $gasto->total;
        }
        $total = $total_fac - $toal_gastos;
        return view('admin.contabilidad.index')->with([
            'total_factura' => $total_fac,
            'total_gastos' => $toal_gastos,
            'total' => $total
        ]);
    }

    public function agregar_base(){
        return view('agregar_base');
    }

    public function agregar_contabiliad(Request $request){
        $input = $request->all();
        $now = Carbon::now();
        $contabilidad = Contabilidad::create([
            'fecha' => $now,
            'total' => 0.00,
            'dinero_base' => $input['valor'],
            'abierto' => true,
            'gastos' => 0.00,
            'ventas' => 0.00
        ]);
        return redirect()->route('caja');
    }

    public function cerrar_caja(){
        $caja = Contabilidad::where('abierto', 1)->get()->first();
        $facturas = Factura::where('fecha', date('Y-m-d'))->get();
        $ventas = 0.00;
        $test = rand(60000, 180000);
        $test = (double) $test;
        $gastos = $test;
        foreach ($facturas as $factura){
            $ventas += $factura->total;
        }
        $caja->ventas = $ventas;
        $caja->gastos = $gastos;
        $caja->total = $ventas + $caja->dinero_base - $gastos;
        $caja->abierto = 0;
        $caja->save();
        return 'cerré caja';
    }

}
