@extends('layouts.main')

@section('title', '- Questões')

@section('content')


	@if(!empty($questions))

		<div class="row row-cols-1 row-cols-lg-2">
			@foreach ($questions as $question)
				<div class="col gx-3 mb-3">
					<a class="text-decoration-none" href='{{ route("question$question->id") }}'>
						<div class="card p-0 pt-0 h-100 rounded-7 shadow">
							<div class="card-body text-center pt-0 px-0">
								<h4 class="card-title mb-4 py-4 bg-watergreen rounded-top-7 fw-bolder text-white">{{ $question->title }}</h4>
								
								<div class="card-text p-4 text-black">@php echo $question->text @endphp</div>

							</div>
						</div>
					</a>
				</div>
			@endforeach

		</div>
	@endempty

@endsection


