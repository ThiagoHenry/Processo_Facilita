@extends('layouts.main')

@section('title', "- $question->title")

@section('content')

	<div class="col-12 col-lg-8 mx-auto">

		@include('utterance')

		@if (session('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<div class="ps-4 ps-md-0 pe-0 pe-md-4 d-sm-flex text-center">
					<span class="pt-2">{{ session('success') }}</span>
					<button class="btn btn-secondary shadow-none btn-details ms-auto" value="{{ session('data')->id }}" data-bs-toggle="modal" data-bs-target="#modalRequest">Visualizar recibo</button>
				</div>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		@endif 

		@if($errors->any())
			<div class="alert alert-danger">
				<ul class="mb-0">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		
		<div class="mb-5">
			<form autocomplete="off" method="POST" action="{{ route('registerBook') }}" class="needs-validation" novalidate>
				@csrf
				<div class="form-floating mb-3">
					<input type="text" class="form-control shadow" name="user_name" id="user_name" placeholder="Nome do livro" required maxlength="191" minlength="2">
					<label for="user_name">Nome do usuário</label>
				</div>
				
				<div class="form-floating mb-3">
					<input type="text" class="form-control shadow" name="book_name" id="book_name" placeholder="Nome do livro" required maxlength="191" minlength="2">
					<label for="book_name">Nome do livro</label>
				</div>
				
				<div class="form-floating mb-3">
					<select class="form-select shadow" name="user_category" id="user_category" required>
						
						@foreach ($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					
					</select>
					<label for="user_category">Selecione o tipo de usuário</label>
				</div>
				<div>
					<button class="btn ms-auto d-block bg-watergreen text-white fw-bolder shadow" type="submit">Registrar</button>
				</div>
			</form>
		</div>


		@if(count($data) > 0)
			<div class="table-responsive shadow">

				<table class="table table-striped border border-white table-striped mb-0">
					<thead>
						<tr>
							<th scope="col">Pedido</th>
							<th scope="col">Solicitante</th>
							<th scope="col">Livro</th>
							<th scope="col">Prazo</th>
							<th scope="col">Ação</th>
						</tr>
					</thead>
					
					<tbody>

						@foreach ($data as $item)
						
							<tr class="align-middle">
								<th scope="row">{{ $item->id }}</th>
								<td>{{ $item->user_name }}</td>
								<td>{{ $item->book_name }}</td>
								<td>{{ $item->limit }}</td>
								<td><button class="btn btn-outline-secondary shadow-none btn-details" value="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#modalRequest">Ver</button></td>
							</tr>

						@endforeach

					</tbody>
				</table>
			<div>

		@endif


			  
	  <!-- Modal -->
	<div class="modal fade printable" id="modalRequest" tabindex="-1" aria-labelledby="modalRequestLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modalRequestLabel"></h5>
					<button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				
				<div class="modal-body">
					<div class="table-responsive">

						<table class="table">
							<thead>

							</thead>
						</table>
					<div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-success" onClick="window.print()">Imprimir recibo</button>
				</div>
			</div>
		</div>
	</div>
		
	<input type="hidden" id="routeDetails" value="{{ route('details') }}">
@endsection

@section('scripts')
	<script src="{{ asset('js/question-two.js') }}"></script>
@endsection

