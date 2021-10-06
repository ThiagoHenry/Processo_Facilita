<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class HomeController extends Controller
{

	public function index()
	{
		$questions = Question::where([
			['status', 1]
		])->get(['id', 'title', 'text']);

		// dd($questions);
		return view('home', [
			'questions' => $questions,
		]);
	}
}
