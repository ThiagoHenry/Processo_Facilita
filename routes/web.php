<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionOneController;
use App\Http\Controllers\QuestionThreeController;
use App\Http\Controllers\QuestionFourController;
use App\Http\Controllers\QuestionTwoController;


Route::get('/', [HomeController::class, 'index']);


Route::get('questao-um', [QuestionOneController::class, 'index'])->name('question1');
Route::get('questao-dois', [QuestionTwoController::class, 'index'])->name('question2');
Route::get('questao-tres', [QuestionThreeController::class, 'index'])->name('question3');
Route::get('questao-quatro', [QuestionFourController::class, 'index'])->name('question4');


Route::post('questao-dois/registrar', [QuestionTwoController::class, 'store'])->name('registerBook');

Route::post('questao-dois/detalhes', [QuestionTwoController::class, 'details'])->name('details');

Route::post('questao-quatro/fibonacci', [QuestionFourController::class, 'sequenceFibonacci'])->name('sequenceFibonacci');



