@extends('plantillas.plantilla1')

@section('titulo','Nueva Categoria')

@section('contenido')
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>NUEVA CATEGORIA</h2>

			<form method="post" action="/categorias">
				@csrf
			  <div class="form-group">
			    <label for="categoria">Nombre de la categoria</label>
			    <input type="text" name="nombre" class="form-control" id="categoria">
			  </div>

			  <button type="submit" class="btn btn-primary">Guardar</button>

			</form>
		</div>
	</div>

@endsection