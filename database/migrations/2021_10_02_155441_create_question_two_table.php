<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTwoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_two', function (Blueprint $table) {
            $table->id();
            $table->integer('user_category')->index();

            $table->string('user_name');
            $table->string('book_name');
			$table->tinyInteger('status')->length(1)->default(1);  

			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('question_twos');

		schema::table('question_two', function (Blueprint $table) {
			$table->integer('user_category')
			->constrained()
			->onDelete('cascade');
		});
    }
}
