@extends('layouts.main')

@section('title', "- $question->title")

@section('content')

	<div class="col-12 col-lg-8 mx-auto">

		@include('utterance')

		<div class="resultado bg-light shadow p-3 mb-3 rounded border"></div>

		<div>
			<button class="btn shadow ms-auto d-block bg-dark border-dark text-white fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
			  Ver resultado detalhado
			</button>
		</div>

		  <div style="min-height: 120px;">
			<div class="collapse" id="collapseWidthExample">
				<div class="table-responsive shadow mt-4">
					<table class="table table-resultado border border-white table-striped mb-0">
					    <thead>
							<tr>
							  <th class='text-center' scope="col">Anos</th>
							  <th class='text-center' scope="col">Juca (altura)</th>
							  <th class='text-center' scope="col">Chico (altura)</th>
							</tr>
						</thead>

						<tbody>

						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
@endsection

@section('scripts')
	<script src="{{ asset('js/question-one.js') }}"></script>
@endsection