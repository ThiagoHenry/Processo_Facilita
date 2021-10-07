<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\Category;
use App\Models\Book;


class QuestionRepository

{
	public function filter($id)
	{
		return Question::where([['id', $id]])->first();
	}


	// QUESTION TWO
	public function category_all()
	{
		return Category::get(['id', 'name']);
	}

	public function all()
	{
		return DB::table('books as a')->Join('categories as b', function ($join) {
			$join->on('a.category_id', '=', 'b.id')
					->where('a.status', '=', 1);
			})->get(['a.id', 'a.user_name', 'a.book_name', 'a.category_id', 'a.created_at', 'b.name as name_category', 'b.days'])		
			->sortBy(function($item) {
				return $item->id;
			});
	}

	public function add($request)
	{
		$request->validate([
			'user_name' => 'required|min:2|max:191',
			'book_name' => 'required|min:2|max:191',
			'category_id' => 'required|integer',
		]);

		$questionTwo = new Book;
 
		$questionTwo->user_name = $request->user_name;
		$questionTwo->book_name = $request->book_name;
		$questionTwo->category_id = (int) $request->category_id;
 
		$questionTwo->save();
 
		return Book::where([
			['id', $questionTwo->id]
			])->first(['id', 'user_name', 'book_name', 'category_id', 'created_at']);
	}

	public function details($id) 
	{
		return DB::table('books as a')->Join('categories as b', function ($join) use ($id) {
			$join->on('a.category_id', '=', 'b.id')
					->where('a.id', '=', $id);
			})->first(['a.id', 'a.user_name', 'a.book_name', 'a.category_id', 'a.created_at', 'b.name as name_category', 'b.days']);
	}
}