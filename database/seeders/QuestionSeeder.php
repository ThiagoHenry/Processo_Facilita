<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('questions')->insert([
				[
				'title' => 'Problema 1',
				'text' => 'Chico tem 1,50m e cresce 2 centimetros por ano, enquanto Juca tem 1,10m e cresce 3 centimetros por ano. Construa um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.',
				'status' => 1,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(), 
			], [
				'title' => 'Problema 2',
				'text' => '<li>A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno), o algoritmo deve imprimir um recibo mostrando o nome do livro, o tipo de usuário por extenso e o total de dias de empréstimo.</li><li>Considerar que o professor tem 10 dias para devolver o livro e o aluno somente 3 dias.</li>',
				'status' => 1,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(), 
			], [
				'title' => 'Problema 3',
				'text' => 'Criar um algoritmo que gere uma matriz 5x5 e imprima: toda a matriz, a matriz gerada apenas com os números impares e outra com os números pares.',
				'status' => 1,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(), 
			], [
				'title' => 'Problema 4',
				'text' => 'Criar um algoritmo com um campo que possa receber apenas números e virgulas, separe os valores enviados e valide aqueles que são um número valido da sequência Fibonacci e imprima os números de forma crescente, conforme o exemplo:<p>CAMPO RECEBE: 1,13,55,21,5,83</p><p>IMPRIME: 1,5,13,21,55</p>',
				'status' => 1,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(), 
			]
		]);
    }
}
