<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\Category;
use App\Models\QuestionTwo;


class QuestionRepository

{
	public function filter($id)
	{
		return Question::where([['id', $id]])->first();
	}


	// QUESTION TWO
	public function category_question_two()
	{
		return Category::get(['id', 'name']);
	}

	public function question_two()
	{
		return DB::table('question_two as a')->Join('categories as b', function ($join) {
			$join->on('a.user_category', '=', 'b.id')
					->where('a.status', '=', 1);
			})->get(['a.id', 'a.user_name', 'a.book_name', 'a.user_category', 'a.created_at', 'b.name as name_category', 'b.days'])		
			->sortBy(function($item) {
				return $item->id;
			});
	}

	public function add($request)
	{
		$request->validate([
			'user_name' => 'required|min:2|max:191',
			'book_name' => 'required|min:2|max:191',
			'user_category' => 'required|integer',
		]);

		$questionTwo = new QuestionTwo;
 
		$questionTwo->user_name = $request->user_name;
		$questionTwo->book_name = $request->book_name;
		$questionTwo->user_category = (int) $request->user_category;
 
		$questionTwo->save();
 
		return QuestionTwo::where([
			['id', $questionTwo->id]
			])->first(['id', 'user_name', 'book_name', 'user_category', 'created_at']);
	}

	public function details($id) 
	{
		return DB::table('question_two as a')->Join('categories as b', function ($join) use ($id) {
			$join->on('a.user_category', '=', 'b.id')
					->where('a.id', '=', $id);
			})->first(['a.id', 'a.user_name', 'a.book_name', 'a.user_category', 'a.created_at', 'b.name as name_category', 'b.days']);
	}
}