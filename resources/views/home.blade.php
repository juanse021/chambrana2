@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cafe Bar la Chambrana</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ol>
                    @if (Auth::user()->role == 'admin')
                            <li><a href="{{route('caja')}}">Caja</a></li>
                            <li><a href="{{route('facturas')}}">Facturacion</a></li>
                            <li><a href="{{route('inventario.index')}}">Inventario</a></li>
                            <li><a href="#">Contabilidad</a></li>
                            <li ><a  href="{{route('receta.create')}}">Nuevo Producto</a></li>
                    @else
                        <li><a href="{{route('caja')}}">Caja</a></li>
                    @endif
                    </ol>

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos de baja inventario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($ingredientes as $ingrediente)
                                    @if($ingrediente->cantidad() <= 20)
                                    <li>{{ $ingrediente->nombre }} - {{ $ingrediente->cantidad() }}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
