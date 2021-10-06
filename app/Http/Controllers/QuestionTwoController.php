<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\QuestionRepository;


class QuestionTwoController extends Controller
{
	public function index(QuestionRepository $q)
	{
		$categories = $q->category_question_two();

		$question = $q->filter(2);

		$data = $q->question_two();
			
		foreach ($data as $item) {
			$item->limit = date('d/m/Y', strtotime("+$item->days days", strtotime($item->created_at)));
		}
		
		return view("question2", [
			'question' => $question,
			'data' => $data,
			'categories' => $categories
		]);
	}


	public function store(QuestionRepository $q, Request $request)
	{
		$data = $q->add($request);

		$data->dateFormat = date('d/m/Y', strtotime($data->created_at));

		 return redirect()->back()->with([
			'success' => 'Registrado com sucesso!',
			'data' => $data
		]);
	}


	public function details(QuestionRepository $q, Request $request)
	{
		$data = $q->details((int)$request->id);

		$data->dateFormat = date('d/m/Y', strtotime($data->created_at));

		$data->limit = date('d/m/Y', strtotime("+$data->days days", strtotime($data->created_at)));
	
		return response()->json([
			'data' => $data,
		]);
	}
}
