<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\QuestionRepository;

class QuestionFourController extends Controller
{
	public function index(QuestionRepository $q)
	{

		$question = $q->filter(4);

		return view("question4", [
			'question' => $question
		]);
	}


	public function sequenceFibonacci(Request $request)
	{
		$request->validate(['numbers' => 'regex:/^[\d,]+$/']);

		$request_sequence = explode(",",$request->numbers);

		if (max($request_sequence) > 24157817) { 
			return  redirect()->back()->withErrors('Existem digitos maiores que 24157817');
		}

		$a = 0;
		$b = 1;
		$fibonacci = [0, 1];

		for ($i=0; $i <= 48 ; $i++) { 
			$result = $a + $b;
			if ($i % 2 == 0) {
				$a = $result;
			} else {
				$b = $result;
			}

			array_push($fibonacci, $result);
		}

		$response = array_unique(array_intersect($fibonacci, $request_sequence));

		return redirect()->back()->with([
			'response' => $response,
			'fibonacci' => $fibonacci,
		]);
	}
}