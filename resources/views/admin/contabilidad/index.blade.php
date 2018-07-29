@extends('layouts.app')
@section('styles')

@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Contabilidad</h1>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tipo</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dinero Base</td>
                                    <td> + {{$total_caja}}</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ventas de facturas</td>
                                    <td> + {{$total_factura}}</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Gastos</td>
                                    <td> - {{$total_gastos}}</td>
                                </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Tipo</th>
                                <th>Total</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    @if($total > 0)
                    <div class="alert-success text-center">
                        <h3>TOTAL BENEFICIO NETO</h3>
                        <h4>{{$total}}</h4>
                    </div>
                        @else
                        <div class="alert-danger text-center">
                            <h3>TOTAL BENEFICIO NETO</h3>
                            <h4>{{$total}}</h4>
                        </div>
                    @endif
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