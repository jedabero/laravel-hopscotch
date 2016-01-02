<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaravelHopscotchCreateStepsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hopscotch_steps', function ($table)
		{
			$table->tinyInteger('stepOrder');
			$table->string('target');
			$table->enum('placement', Config::get('laravel-hopscotch::steps.placements'));
			$table->string('title', 511)->nullable();
			$table->text('content')->nullable();
			$table->smallInteger('width')->unsigned()->nullable();
			$table->smallInteger('padding')->nullable();
			$table->smallInteger('xOffset')->nullable();
			$table->smallInteger('yOffset')->nullable();
			$table->smallInteger('arrowOffset')->nullable();
			$table->smallInteger('delay')->unsigned()->nullable();
			$table->smallInteger('zindex')->nullable();
			$table->boolean('showNextButton')->nullable();
			$table->boolean('showPrevButton')->nullable();
			$table->boolean('showCTAButton')->nullable();
			$table->string('ctaLabel')->nullable();
			$table->boolean('multipage')->default(false);
			$table->boolean('showSkip')->default(false);
			$table->boolean('fixedElement')->default(false);
			$table->boolean('nextOnTargetClick')->nullable();
			$table->string('tour_id');
			$table->foreign('tour_id')->references('id')->on('hopscotch_tours')->onDelete('cascade');
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
		Schema::drop('hopscotch_steps');
	}

}
