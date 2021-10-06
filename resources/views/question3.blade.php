@extends('layouts.main')

@section('title', "- $question->title")

@section('content')

	<div class="col-12 col-lg-8 mx-auto">

		@include('utterance')

		<div class="col">
			<div class="list-group flex-row" id="control-matriz" role="tablist">
				
				<a class="list-group-item list-group-item-action mx-1 text-center py-5 shadow active" id="matriz_complete" href="#" data-bs-toggle="list" role="tab">
					<span class="force-center">Matriz 5 x 5</span>
				</a>
				
				<a class="list-group-item list-group-item-action mx-1 text-center py-5 shadow" id="matriz_par" href="#" data-bs-toggle="list"role="tab">
					<span class="force-center">Matriz 5 x 5 (par)</span>
				</a>

				<a class="list-group-item list-group-item-action mx-1 text-center py-5 shadow" id="matriz_impar" href="#" data-bs-toggle="list" role="tab">
					<span class="force-center">Matriz 5 x 5 (impar)</span>
				</a>

			</div>
		</div>

		<div class="p-3 col-12 col-sm-10 col-md-7 mx-auto bor" id="matriz">
			
			@php
				$count = 1;	
			@endphp
			
			@for ($i = 0; $i < 5; $i++)
				<div class="row row-cols-5">
					@for ($j = 0; $j < 5; $j++)

						<div class="col g-0 text-center bg-watergreen border text-white position-relative shadow @if($count%2 == 0) par @else impar @endif" style="--aspect-ratio: 1/1">
							<p class="force-center mb-0 fw-bolder">{{ $count }}</p>
						</div>
						
						@php
							$count += 1;
						@endphp
					@endfor
				</div>
			@endfor

		</div>
	</div>
@endsection

@section('scripts')
	<script src="{{ asset('js/question-three.js') }}"></script>
@endsection
