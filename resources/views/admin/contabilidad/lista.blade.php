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
                        @if($contabilidad->abierto == 1)
                        <a href="{{route('cerrar_caja')}}" style="float: right"><button class="btn btn-primary"> Actualizar datos</button></a>
                        @endif
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr>
                                <th>Referencia</th>
                                <th>Fecha</th>
                                <th>Total</th>
                                <th>Base</th>
                                <th>Ventas</th>
                                <th>Gastos</th>
                                <th>Ver</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cajas as $caja)
                                <tr>
                                    <td>{{$caja->id}}</td>
                                    <td>{{$caja->fecha}}</td>
                                    <td>{{$caja->total}}</td>
                                    <td>{{$caja->dinero_base}}</td>
                                    <td>{{$caja->ventas}}</td>
                                    <td>{{$caja->gastos}}</td>
                                    <td><a href="{{route('ver_caja', $caja->id)}}">
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
                                <th>Base</th>
                                <th>Ventas</th>
                                <th>Gastos</th>
                                <th>Ver</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    @if(count($errors) > 0)

                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{!!$error!!}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

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