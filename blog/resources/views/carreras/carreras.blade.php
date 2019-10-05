@extends('plantillas.plantilla1')

@section('titulo','Carreras')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>Lista de Carreras</h2>
			<table class="table">
				<tr>
					<th>#</th>
					<th>LOGO</th>
					<th>NOMBRE</th>
					<th>EDITAR</th>
					<th>ELIMINAR</th>
				</tr>
@foreach($carreras as $carrera)
				<tr>
					<td>{{$carrera->numero}}</td>
					<td>
						<img class="img-carrera" src="{{asset('img/'.$carrera->logo)}}">
					</td>
					<td>{{$carrera->nombre}}</td>
					<td><button type="submit" class="btn btn-primary">Editar</button></td>
					<td><button type="submit" class="btn btn-danger">Eliminar</button></td>
				</tr>
@endforeach
			</table>
		</div>
	</div>

@endsection