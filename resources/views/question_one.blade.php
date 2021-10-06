@extends('layouts.main')

@section('title', 'Questão 1')

@section('content')

<div class="col-12 col-lg-8 mx-auto">
	<div class="card p-5">
		<div class="card-body text-center">
			<h4 class="card-title">Problema 1</h4>
			<p class="card-text">
				Chico tem 1,50m e cresce 2 centimetros por ano, enquanto Juca tem 1,10m e cresce 3 centimetros por ano. 
				Construa um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.
			</p>
		</div>
	</div>

	<div class="resultado">
		<h6></h6>
	</div>
</div>


@section('scripts')
	{{-- <script src="resources/js/question-one.js"></script> --}}
@endsection