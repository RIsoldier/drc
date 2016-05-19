<?php
use Faker\Factory as Faker;

class ProcedureCategoryTableSeeder extends DatabaseSeeder
{

	public function run()
	{

		factory(App\ProcedureCategory::class, 4)->create();

	}
}
