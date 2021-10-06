$( "#control-matriz  a" ).click(function() {
	if ($(this).attr('id') === 'matriz_par') {
		$('.impar').addClass('opacity-0');
		$('.par').removeClass('opacity-0');
	} else if ($(this).attr('id') === 'matriz_impar') {
		$('.par').addClass('opacity-0');
		$('.impar').removeClass('opacity-0');
	} else {
		$('.impar').removeClass('opacity-0');
		$('.par').removeClass('opacity-0');
	}
});