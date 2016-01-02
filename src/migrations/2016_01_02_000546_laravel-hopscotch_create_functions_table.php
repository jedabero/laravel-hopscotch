<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaravelHopscotchCreateFunctionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hopscotch_functions', function ($table)
		{
			$table->string('event');
			$table->string('name');
			$table->string('hopscotch_id');
			$table->string('hopscotch_type');
			$table->nullableTimestamps();
			$table->index(['hopscotch_id', 'hopscotch_type']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hopscotch_functions');
	}

}
