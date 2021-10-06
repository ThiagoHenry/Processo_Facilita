<?php

use App\Models\Question;


if (!function_exists('get_questions')) {
	function get_questions(){
		return 	Question::where([
			['status', 1]
		])->get(['id', 'title', 'text']);
	}
}