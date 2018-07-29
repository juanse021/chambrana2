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

                    <div class="card-body">


                        <form method="POST" action="{{ route('agregar_contabiliad') }}">
                            @csrf

                            <div class="form-group row">
                                <label  for="email" class="col-sm-4 col-form-label text-md-right">Valor</label>

                                <div class="col-md-6">
                                    <input id="valor" type="number" min="0" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="valor"  required autofocus>

                                    @if ($errors->has('valor'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('valor') }}</strong>
                                    </span>
                                    @endif
                                </div>

                            </div>

                            <hr>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Agregar
                                    </button>
                                </div>
                            </div>
                        </form>
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