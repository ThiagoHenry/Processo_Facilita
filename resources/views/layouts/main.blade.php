<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <title>Facilita App @yield('title')</title>

    </head>
    <body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light shadow py-3 mb-4">
			<div class="container-fluid">
				
				<button class="navbar-toggler ms-auto d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-end">
						<li class="nav-item">
							<a class="nav-link active px-4 {{ (request()->is('/')) ? 'fw-bolder active' : 'text-muted' }}" href='{{URL::to('/') }}'>Home</a>
						</li>

						@foreach (get_questions() as $question)
							<li class="nav-item">
								<a class="nav-link active px-4 {{ route('question'.$question->id) == url()->current() ? 'fw-bolder active' : 'text-muted' }}" 
									href='{{ route('question'.$question->id) }}'>{{ $question->title }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</nav>



		<div class="container">

			<main>
				@yield('content')
			</main>

		</div>

		{{-- js --}}
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/bootstrap.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		

		{{-- impede que JS desnecessários sejam carregados sem precisão --}}
		@yield('scripts')

	</body>
</html>
