@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Escoga una mesa</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        <ol>
                           @foreach( $mesas as $mesa)
                                <li><a href="{{route('factura', [$mesa->id] )}}">Mesa {{$mesa->mesa}}</a></li>
                               @endforeach
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
