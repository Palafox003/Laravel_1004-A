@extends('plantillas.plantilla1')

@section('titulo','Roles')

@section('contenido')
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>Nuevo Rol</h2>

			<form method="post" action="/roles">
				@csrf
			  <div class="form-group">
			    <label for="rol">Nombre del Rol</label>
			    <input type="text" name="nombre" class="form-control" id="rol">
			  </div>

			  <button type="submit" class="btn btn-primary">Guardar</button>

			</form>
		</div>
	</div>

@endsection