<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
   public function questionOne()
   {
		$juca = 1.10; 
		$chico  = 1.50; 
		$count = 0;

		while ($juca < $chico) { 
			$juca += 0.03;
			$chico += 0.02;
			$count++;

			// dump('juca = '.$juca);
			// dump('chico = '.$chico);
			// dump($count);

		}


		return view('question_one', [

		]);
   }
}
