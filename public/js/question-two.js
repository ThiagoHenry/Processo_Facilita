$( ".btn-details" ).click(function() {
	let id = $(this).val();

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$.ajax({
		type: "POST",
		url: $('#routeDetails').val(),
		data:{ 'id': id },
		dataType: 'json',
		success: function(response) {
			write(response.data);
		}
	});
});


 function write(response)
{
	$('#modalRequestLabel').html('Pedido #' + response.id)
	let html = `<tr>
						<th scope="col">Número do Pedido</th>
						<td class="fw-bolder">`+ response.id +`</td>
					</tr>
					<tr>
						<th scope="col">Nome do Solicitante</th>
						<td>`+ response.user_name +`</td>
					</tr>
					<tr>
						<th scope="col">Tipo de Usuário</th>
						<td>`+ response.name_category +`</td>
					</tr>
					<tr>
						<th scope="col">Nome do Livro</th>
						<td>`+ response.book_name +`</td>
					</tr>
					<tr>
						<th scope="col">Data do Pedido</th>
						<td>`+ response.dateFormat +`</td>
					</tr>
					<tr>
						<th scope="col">Prazo de Entrega</th>
						<td>`+ response.limit +`</td>
					</tr>`;
	$('#modalRequest thead').html(html);
}