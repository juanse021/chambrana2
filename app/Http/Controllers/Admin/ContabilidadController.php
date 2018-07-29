<?php

namespace App\Http\Controllers\Admin;

use App\Contabilidad;
use App\Factura;
use App\Gasto;
use App\Log;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContabilidadController extends Controller
{
    //
    public function index()
    {
        $cajas = Contabilidad::all();
        $contabiliad = Contabilidad::where('fecha', date('Y-m-d'))->get()->first();
        return view('admin.contabilidad.lista')->with([
            'cajas' => $cajas,
            'contabilidad' => $contabiliad
        ]);
    }

    public function vercaja($id){
        $caja = Contabilidad::find($id);
        return view('admin.contabilidad.index')->with([
            'total_caja' => $caja->dinero_base,
            'total_factura' => $caja->ventas,
            'total_gastos' => $caja->gastos,
            'total' => $caja->total - $caja->gastos
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
        $test = rand(60000, 100000);
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
        $log = Log::create([
            'id_usuario' => Auth::user()->id,
            'accion' => Auth::user()->name . ' cerró caja',
            'expl' => 'Se cerró caja',
        ]);
        return redirect()->route('contabilidad.index');
    }

}
