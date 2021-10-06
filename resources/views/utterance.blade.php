<div class="card p-0 mb-5 rounded-7 shadow">
	
	<div class="card-body text-center p-0">
		<h4 class="card-title mb-4 py-4 bg-watergreen rounded-top-7 fw-bolder text-white">{{ $question->title }}</h4>
		
		<div class="card-text p-4 pb-5">@php echo $question->text @endphp</div>

	</div>
</div>