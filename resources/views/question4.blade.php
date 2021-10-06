@extends('layouts.main')

@section('title', "- $question->title")

@section('content')

	<div class="col-12 col-lg-8 mx-auto">

		@include('utterance')


		@if($errors->any())
			<div class="alert alert-danger">
				<ul class="mb-0">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
						<li>Digite apenas números e virgulas. Ex: 1,5,13,8. <small>(max: 24157817)</small></li>
				</ul>
			</div>
		@endif

		{{-- <form autocomplete="off" method="POST" action="{{ route('sequenceFibonacci') }}" class="needs-validation @if($errors->any()) was-validated @endif" novalidate> --}}
		<form autocomplete="off" method="POST" action="{{ route('sequenceFibonacci') }}" class="needs-validation" novalidate>
			@csrf
		
			<div class="form-floating mb-3">
				{{-- <input type="text" class="form-control shadow" name="numbers" id="numbers" placeholder="Números" required maxlength="191" minlength="1" pattern="^[\d,]+$"> --}}
				<input type="text" class="form-control shadow" name="numbers" id="numbers" placeholder="Números" required>
				<label for="user_name">Digite alguns números. ex: 1,5,13,8 <small class="text-muted">(max: 24157817)</small></label>
			</div>

			<button class="btn ms-auto d-block shadow fw-bolder bg-dark text-white" type="submit">Verificar Sequência</button>
		</form>

		@if ( session('response') !== NULL )
			<div class="mt-5">
					
				<button class="btn btn-dark mb-2 ms-auto d-block shadow-none fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#fibonacci50" aria-expanded="false" aria-controls="fibonacci50">
					Ver 50 Primeiros números da sequência Fibonacci
				</button>

				<div class="collapse bg-light shadow px-3 py-4 mb-4 rounded border" id="fibonacci50">
					<ul class="mb-0">
						@foreach (session('fibonacci') as $value)
							<li>{{ $value }}</li>
						@endforeach
					</ul>
				</div>

				<div class="bg-light shadow px-3 py-4 rounded border">
					@if ( count(session('response')) > 0 )
						
						<p>Números digitados que pertencem a sequência Fibonacci:</p>
						
						<ul class="mb-0">
							@foreach (session('response') as $value)
								<li>{{ $value }}</li>
							@endforeach
						</ul>
					@else
					<p class="mb-0">Nenhum dos números digitados correspondem a sequência Fibonacci</p>
					@endif
				</div>
			</div>

		@endif

	</div>




@endsection

@section('scripts')
@endsection

