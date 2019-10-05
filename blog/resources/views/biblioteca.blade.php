@extends('plantillas.plantilla1')

@section('titulo','Biblioteca')

@section('contenido')		
		<div class="row">
			<div class="col">
				<div id="img1">
					<div id="img-jb" class="jumbotron">
					  <h1 class="display-4">OTOÑO & INVIERNO</h1>
					  <a class="btn btn-dark btn-lg" href="#" role="button">Comprar</a>
					</div>
				</div>
			</div>
		</div>
<!--  Inicia la tercera fila -->
		<div class="row">
			<div class="col">
				<div id="txt1">
					ENVÍOS GRATIS A TODO EL MUNDO
				</div>
				<div id="txt2">
					<h2>TODO EL AÑO</h2>
					<hr>
					Los infaltables
				</div>
			</div>
		</div>

		<div class="row justify-content-md-center">
			<div class="col-2">
				<img class="img-fluid" src="img/dama.jpg">
			</div>
			<div class="col-2">
				<img class="img-fluid" src="img/infantil.jpg">
			</div>
			<div class="col-2">
				<img class="img-fluid" src="img/caballero.png">
			</div>
		</div>
@endsection