<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProcedureTableSeeder extends Seeder
{

	public function run()
	{

		factory(App\Procedure::class, 8)->create();

	}
}
