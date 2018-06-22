@extends('layouts.app')
@section('styles')

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Facturas</h1>
                        <a href="{{route('cerrar_caja')}}" style="float: right"><button class="btn btn-primary"> Cerrar Caja </button></a>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Mesa</th>
                                <th>Ver</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($facturas as $factura)
                                <tr>
                                    <td>{{$factura->id}}</td>
                                    <td>{{$factura->fecha}}</td>
                                    <td>{{$factura->total}}</td>
                                    <td>{{$factura->mesa->mesa}}</td>
                                    <td><a href="{{route('ver_factura', $factura->id)}}">
                                            <button>
                                                <i class="glyphicon glyphicon-zoom-in"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Referencia</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Mesa</th>
                                <th>Ver</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );

    </script>

@endsection