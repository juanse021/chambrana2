@extends('layouts.app')
@section('styles')

@endsection
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<h1>Inventario</h1>
						<table id="example" class="display" style="width:100%">
							<thead>
							<tr>
								<th>Id</th>
								<th>Nombre</th>
								<th>Tipo</th>
								<th>Cantidad</th>

							</tr>
							</thead>
							<tbody>
							@foreach($ingredientes as $ingrediente)
								<tr>
									<td>{{$ingrediente->id}}</td>
									<td>{{$ingrediente->nombre}}</td>
									<td>{{$ingrediente->tipo}}</td>
									<td>{{$ingrediente->cantidad()}}</td>
								</tr>
							@endforeach
							</tbody>
							<tfoot>
							<tr>
								<th>Referencia</th>
								<th>Fecha</th>
								<th>Total</th>
								<th>Mesa</th>
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