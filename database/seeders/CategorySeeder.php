<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('categories')->insert([
				[
				'name' => 'Professor',
				'days' => 10,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(), 
			], [
				'name' => 'Aluno',
				'days' => 3,
				'updated_at' => Carbon::now(),
				'created_at' => Carbon::now(), 
			]
		]);
    }
}
