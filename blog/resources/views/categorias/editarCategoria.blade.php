@extends('plantillas.plantilla1')

@section('titulo','Nueva Categoria')

@section('contenido')
	<div class="row">
		<div class="col">
			<br><br><br>
			<h2>NUEVA CATEGORIA</h2>

			<form method="post" action="/categorias/{{$categoria->id}}">
				@csrf
				<input type="hidden" name="_method" value="PUT">
			  <div class="form-group">
			    <label for="categoria">Nombre de la categoria</label>
			    <input type="text" name="nombre" class="form-control" id="categoria" value="{{$categoria->nombre}}">
			  </div>

			  <button type="submit" class="btn btn-primary">Editar</button>

			</form>
		</div>
	</div>

@endsection