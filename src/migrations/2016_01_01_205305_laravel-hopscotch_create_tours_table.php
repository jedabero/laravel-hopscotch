<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaravelHopscotchCreateToursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hopscotch_tours', function ($table)
		{
			$table->string('id')->primary();
			$table->smallInteger('bubbleWidth')->default(280)->unsigned();
			$table->smallInteger('bubblePadding')->default(15);
			$table->boolean('smoothScroll')->default(true);
			$table->smallInteger('scrollDuration')->default(1000)->unsigned();
			$table->smallInteger('scrollTopMargin')->default(200);
			$table->boolean('showCloseButton')->default(true);
			$table->boolean('showPrevButton')->default(false);
			$table->boolean('showNextButton')->default(true);
			$table->smallInteger('arrowWidth')->default(20)->unsigned();
			$table->boolean('skipIfNoElement')->default(true);
			$table->boolean('nextOnTargetClick')->default(false);
			$table->nullableTimestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hopscotch_tours');
	}

}
