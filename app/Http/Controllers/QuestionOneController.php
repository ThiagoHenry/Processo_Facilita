<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Repositories\QuestionRepository;


class QuestionOneController extends Controller
{
   public function index(QuestionRepository $q)
   {
		$question = $q->filter(1);


		return view("question1", [
			'question' => $question
		]);
   }
}
