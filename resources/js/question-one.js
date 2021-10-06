require('./bootstrap');

let juca = 1.10; 
let chico  = 1.50; 
let count = 0;

while (juca < chico) { 
	juca += 0.03;
	chico += 0.02;
	count++;

	console.log(juca.toFixed(2));
}
$('.resultado p').html(`serão necessários <b>` + count + `</b> anos para que Juca fique maior que Chico`)