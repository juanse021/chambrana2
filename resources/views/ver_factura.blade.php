@extends('layouts.app')
@section('styles')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
@endsection

@section('content')
    <div class="hide" id="urlAct">{{ url('/') }}</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Factura</h1></div>

                    <h2>PRODUCTOS</h2>

                    <table>
                        <tr>
                            <th>Referencia</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Valor Unidad</th>
                            <th>Valor</th>
                        </tr>
                        @foreach($detalles as $detalle)
                            <tr>
                                <td>{{$detalle->producto->id}}</td>
                                <td>{{$detalle->producto->nombre}}</td>
                                <td>{{$detalle->cantidad}}</td>
                                <td>{{$detalle->producto->precio}}</td>

                                <td>{{$detalle->cantidad * $detalle->producto->precio}}</td>
                            </tr>
                        @endforeach
                    </table>

                    <div class="card-body">

                            <div class="form-group row">
                                <label disabled for="email" class="col-sm-4 col-form-label text-md-right">Referencia</label>

                                <div class="col-md-6">
                                    <input disabled  id="id_factura" class="form-control" name="email" value="{{ $factura->id}}" required autofocus>

                                </div>

                            </div>
                            <div class="form-group row">
                                <label  for="email" class="col-sm-4 col-form-label text-md-right">Mesa</label>

                                <div class="col-md-6">
                                    <input disabled  id="email" class="form-control" name="email" value="{{ $factura->mesa->id}}" required autofocus>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">TOTAL</label>

                                <div class="col-md-6">
                                    <input id="total" disabled type=number step=0.01 class="form-control" value="{{$factura->total}}" name="password" required>

                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $(".agregar").on('click',function () {
            $.ajax({
                url: $('#urlAct').html() + '/agregar_producto',
                type: 'post',
                data: {
                    id_factura : $('#id_factura').val(),
                    producto :  $('#producto').val(),
                    cantidad  :  $('#cantidad').val(),
                    _token : $('meta[name="csrf-token"]').attr('content')
                },
                success:function(respuesta) {
                    if (respuesta.ok) {
                        location.reload();
                    } else {
                        alert('uy algo no salió bien' + respuesta.error);
                    }
                }
            });
        });


    </script>

@endsection