<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Repositories\QuestionRepository;


class QuestionThreeController extends Controller
{
    public function index(QuestionRepository $q)
	{
		$question = $q->filter(3);

		return view("question3", [
			'question' => $question
		]);
	}
}
