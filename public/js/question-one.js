let juca = 1.10; 
let chico  = 1.50; 
let anos = 0;
let html_table = '';

while (juca < chico) { 
	juca += 0.03;
	chico += 0.02;
	anos++;

	html_table += `<tr>
								<th scope="row" class='text-center'>`+ anos +`</th>
								<td class='text-center'>`+ juca.toFixed(2).replace('.', ',') +`m</td>
								<td class='text-center'>`+ chico.toFixed(2).replace('.', ',') +`m</td>
							</tr>`;
}

let html_resultado = `<p class='mb-0'>Serão necessários <b>` + anos + `</b> anos para que Juca fique maior que Chico</p>`



$('.resultado').html(html_resultado)
$('.table-resultado tbody').html(html_table)