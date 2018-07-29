@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Producto</div>
                </div>
                <form method="POST" action="{{route('receta.store')}}">
                    @csrf
                <table class="table table-striped" id="d_table">

                        <tr>
                            <th>Nombre del nuevo producto</th>
                            <th>Precio del producto</th>
                            <th>AÒadir ingrediente</th>
                        <tr>
                        <tr>
                            <td><input type="text" name="nombre_producto" id="producto" required></td>
                            <td><input type="number" name="precio" id="precio" min="0" required></td>
                            <td><div class="btn btn-success" id="agregar_ingrediente">+</div></td>
                        </tr>
                        <th>Ingrediente</th>
                        <th>Cantidad</th>
                        <th>Quitar</th>
                        </tr>



                </table>
                    <button class="btn btn-info agregar_receta" type="submit" >Agregar Receta</button>
                </form>
                @if(count($errors) > 0)

                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <ul>
                            @if ($errors->has('ingrediente'))
                                <li>Es obligatorioa agregar ingredientes</li>
                            @endif
                                @if ($errors->has('nombre_producto'))
                                    <li>Es obligatorioa agregar nombre producto</li>
                                @endif
                                @if ($errors->has('cantidad'))
                                    <li>Es obligatorioa agregar cantidad al ingrediente</li>
                                @endif
                                @if ($errors->has('precio'))
                                    <li>Es obligatorioa agregar precio al producto</li>
                                @endif

                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                @endif


            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            var cont = 1;
            $('#agregar_ingrediente').click(function() {
                console.log(cont);
                cont++;
                $('#d_table').append('<tr id="row'+cont+'">\
                        <td>\
                            <select id="ingrediente[]" class="js-example-basic-single" name="ingrediente[]" style="width: 90%">\
                                @foreach($ingredientes as $ingrediente)\
                                <option value="{{$ingrediente->id}}">{{$ingrediente->nombre}} --- {{$ingrediente->tipo}}</option>\
                                @endforeach\
                        </select>\
                        </td>\
                <td><input type="number" id="cantidad" name="cantidad[]" min="1" max="100" required></td>\
                <td><button class="btn btn-danger quitar_ingrediente" name="quitar_ingrediente" id="'+cont+'">-</button></td></tr>'
                );
            });

            $(document).on('click', '.quitar_ingrediente', function() {
                var boton_id = $(this).attr("id");
                $('#row' + boton_id + '').remove();
            });
        });
    </script>

@endsection