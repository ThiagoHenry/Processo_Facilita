<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionTwo extends Model
{
    use HasFactory;

	protected $table = 'question_two';

	public function category()
	{
		return $this->belongsTo('App\Models\QuestionTwo');
	}
}

