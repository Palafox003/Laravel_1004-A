@extends('plantillas.plantilla1')

@section('titulo','Nueva Carrera')

@section('contenido')

	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>Nueva Carrera</h2>
			<form method="post" enctype="multipart/form-data" action="/carreras">
				@csrf
			  <div class="form-group">
			    <label for="nombre">Nombre</label>
			    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Carrera">
			  </div>
			  
			  <div class="form-group">
			    <label for="logo">Logo</label>
			    <input type="file" class="form-control" id="logo" name="logo" placeholder="Carrera">
			  </div>

			  <div class="form-group">
			    <label for="numero">Número de carrera</label>
			    <input type="text" class="form-control" id="numero" name="numero" placeholder="Número de carrera">
			  </div>
			  
			  <button type="submit" class="btn btn-primary">Guardar</button>
			</form>
		</div>
	</div>

@endsection