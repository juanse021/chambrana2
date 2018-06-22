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
                    <h3>Necesitas agregar un valor base para abrir caja</h3>
                    <div class="card-body">
                        <p>
                           <a href="{{route('agregar_base')}}">  Haz click aqui </a> para agregar caja
                        </p>
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
            if($('#cantidad').val() == 0){
                return alert('ingresa cantidad');
            }
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